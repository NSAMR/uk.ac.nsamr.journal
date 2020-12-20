<?php

/**
 * @file ReviewReportPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ReviewReportPlugin
 * @ingroup plugins_reports_review
 * @see ReviewReportDAO
 *
 * @brief Review report plugin
 */

import('lib.pkp.classes.plugins.ReportPlugin');

class ReviewReportPlugin extends ReportPlugin {
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		$success = parent::register($category, $path, $mainContextId);
		if ($success && Config::getVar('general', 'installed')) {
			$this->import('ReviewReportDAO');
			$reviewReportDAO = new ReviewReportDAO();
			DAORegistry::registerDAO('ReviewReportDAO', $reviewReportDAO);
		}
		$this->addLocaleData();
		return $success;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return 'ReviewReportPlugin';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.reports.reviews.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.reports.reviews.description');
	}

	/**
	 * @copydoc ReportPlugin::display()
	 */
	function display($args, $request) {
		$context = $request->getContext();

		header('content-type: text/comma-separated-values');
		header('content-disposition: attachment; filename=reviews-' . date('Ymd') . '.csv');
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_SUBMISSION);

		$reviewReportDao = DAORegistry::getDAO('ReviewReportDAO');
		list($commentsIterator, $reviewsIterator, $interestsArray) = $reviewReportDao->getReviewReport($context->getId());

		$comments = array();
		while ($row = $commentsIterator->next()) {
			if (isset($comments[$row['submission_id']][$row['author_id']])) {
				$comments[$row['submission_id']][$row['author_id']] .= "; " . $row['comments'];
			} else {
				$comments[$row['submission_id']][$row['author_id']] = $row['comments'];
			}
		}

		import('lib.pkp.classes.submission.reviewAssignment.ReviewAssignment');
		$recommendations = array(
			SUBMISSION_REVIEWER_RECOMMENDATION_ACCEPT => 'reviewer.article.decision.accept',
			SUBMISSION_REVIEWER_RECOMMENDATION_PENDING_REVISIONS => 'reviewer.article.decision.pendingRevisions',
			SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_HERE => 'reviewer.article.decision.resubmitHere',
			SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_ELSEWHERE => 'reviewer.article.decision.resubmitElsewhere',
			SUBMISSION_REVIEWER_RECOMMENDATION_DECLINE => 'reviewer.article.decision.decline',
			SUBMISSION_REVIEWER_RECOMMENDATION_SEE_COMMENTS => 'reviewer.article.decision.seeComments'
		);

		$columns = array(
			'stage_id' => __('workflow.stage'),
			'round' => __('plugins.reports.reviews.round'),
			'submission' => __('plugins.reports.reviews.submissionTitle'),
			'submission_id' => __('plugins.reports.reviews.submissionId'),
			'reviewer' => __('plugins.reports.reviews.reviewer'),
			'user_given' => __('user.givenName'),
			'user_family' => __('user.familyName'),
			'orcid' => __('user.orcid'),
			'country' => __('common.country'),
			'affiliation' => __('user.affiliation'),
			'email' => __('user.email'),
			'interests' => __('user.interests'),
			'dateassigned' => __('plugins.reports.reviews.dateAssigned'),
			'datenotified' => __('plugins.reports.reviews.dateNotified'),
			'dateconfirmed' => __('plugins.reports.reviews.dateConfirmed'),
			'datecompleted' => __('plugins.reports.reviews.dateCompleted'),
			'dateacknowledged' => __('plugins.reports.reviews.dateAcknowledged'),
			'unconsidered' => __('plugins.reports.reviews.unconsidered'),
			'datereminded' => __('plugins.reports.reviews.dateReminded'),
			'dateresponsedue' => __('reviewer.submission.responseDueDate'),
			'overdueresponse' => __('plugins.reports.reviews.responseOverdue'),
			'datedue' => __('reviewer.submission.reviewDueDate'),
			'overdue' => __('plugins.reports.reviews.reviewOverdue'),
			'declined' => __('submissions.declined'),
			'recommendation' => __('plugins.reports.reviews.recommendation'),
			'comments' => __('plugins.reports.reviews.comments')
		);

		$fp = fopen('php://output', 'wt');
		//Add BOM (byte order mark) to fix UTF-8 in Excel
		fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
		fputcsv($fp, array_values($columns));

		$reviewAssignmentDao = DAORegistry::getDAO('ReviewAssignmentDAO');
		$reviewFormResponseDao = DAORegistry::getDAO('ReviewFormResponseDAO');
		$reviewFormElementDao = DAORegistry::getDAO('ReviewFormElementDAO');

		while ($row = $reviewsIterator->next()) {
			if (substr($row['dateresponsedue'], 11) === '00:00:00') {
				$row['dateresponsedue'] = substr($row['dateresponsedue'], 0, 11) . '23:59:59';
			}
			if (substr($row['datedue'], 11) === '00:00:00') {
				$row['datedue'] = substr($row['datedue'], 0, 11) . '23:59:59';
			}
			list($overdueResponseDays, $overdueDays) = $this->getOverdueDays($row);
			$row['overdueresponse'] = $overdueResponseDays;
			$row['overdue'] = $overdueDays;

			foreach ($columns as $index => $junk) switch ($index) {
				case 'stage_id':
					$columns[$index] = __(WorkflowStageDAO::getTranslationKeyFromId($row[$index]));
					break;
				case 'declined':
					$columns[$index] = __($row[$index]?'common.yes':'common.no');
					break;
				case 'unconsidered':
					$columns[$index] = __($row[$index]?'common.yes':'');
					break;
					case 'recommendation':
					if (isset($recommendations[$row[$index]])) {
						$columns[$index] = (!isset($row[$index])) ? __('common.none') : __($recommendations[$row[$index]]);
					} else {
						$columns[$index] = '';
					}
					break;
				case 'comments':
					$reviewAssignment = $reviewAssignmentDao->getById($row['review_id']);
					$body = '';

					if ($reviewAssignment->getDateCompleted() != null && ($reviewFormId = $reviewAssignment->getReviewFormId())) {
						$reviewId = $reviewAssignment->getId();
						$reviewFormElements = $reviewFormElementDao->getByReviewFormId($reviewFormId);
						while ($reviewFormElement = $reviewFormElements->next()) {
							if (!$reviewFormElement->getIncluded()) continue;
							$body .= PKPString::stripUnsafeHtml($reviewFormElement->getLocalizedQuestion());
							$reviewFormResponse = $reviewFormResponseDao->getReviewFormResponse($reviewId, $reviewFormElement->getId());
							if ($reviewFormResponse) {
								$possibleResponses = $reviewFormElement->getLocalizedPossibleResponses();
								if (in_array($reviewFormElement->getElementType(), array(REVIEW_FORM_ELEMENT_TYPE_CHECKBOXES, REVIEW_FORM_ELEMENT_TYPE_RADIO_BUTTONS))) {
									ksort($possibleResponses);
									$possibleResponses = array_values($possibleResponses);
								}
								if (in_array($reviewFormElement->getElementType(), $reviewFormElement->getMultipleResponsesElementTypes())) {
									if ($reviewFormElement->getElementType() == REVIEW_FORM_ELEMENT_TYPE_CHECKBOXES) {
										$body .= '<ul>';
										foreach ($reviewFormResponse->getValue() as $value) {
											$body .= '<li>' . PKPString::stripUnsafeHtml($possibleResponses[$value]) . '</li>';
										}
										$body .= '</ul>';
									} else {
										$body .= '<blockquote>' . PKPString::stripUnsafeHtml($possibleResponses[$reviewFormResponse->getValue()]) . '</blockquote>';
									}
									$body .= '<br>';
								} else {
									$body .= '<blockquote>' . nl2br(htmlspecialchars($reviewFormResponse->getValue())) . '</blockquote>';
								}
							}
						}
					}

					if (isset($comments[$row['submission_id']][$row['reviewer_id']])) {
						$columns[$index] = $comments[$row['submission_id']][$row['reviewer_id']];
					} else {
						$columns[$index] = $body;
					}
					break;
				case 'interests':
					if (isset($interestsArray[$row['reviewer_id']])) {
						$columns[$index] = $interestsArray[$row['reviewer_id']];
					} else {
						$columns[$index] = '';
					}
					break;
				default:
					$columns[$index] = $row[$index];
			}
			fputcsv($fp, $columns);
		}
		fclose($fp);
	}

	function getOverdueDays($row) {
		$responseDueTime = strtotime($row['dateresponsedue']);
		$reviewDueTime = strtotime($row['datedue']);
		$overdueResponseDays = $overdueDays = '';
		if (!$row['dateconfirmed']){ // no response
			if($responseDueTime < time()) { // response overdue
				$datediff = time() - $responseDueTime;
				$overdueResponseDays = round($datediff / (60 * 60 * 24));
			} elseif ($reviewDueTime < time()) { // review overdue but not response
				$datediff = time() - $reviewDueTime;
				$overdueDays = round($datediff / (60 * 60 * 24));
			}
		} elseif (!$row['datecompleted']) { // response given, but not completed
			if ($reviewDueTime < time()) { // review due
				$datediff = time() - $reviewDueTime;
				$overdueDays = round($datediff / (60 * 60 * 24));
			}
		}
		return array($overdueResponseDays, $overdueDays);
	}
}
