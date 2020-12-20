<?php

/**
 * @file plugins/reports/reviewReport/ReviewReportDAO.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ReviewReportDAO
 * @ingroup plugins_reports_review
 * @see ReviewReportPlugin
 *
 * @brief Review report DAO
 */

import('lib.pkp.classes.submission.SubmissionComment');
import('lib.pkp.classes.db.DBRowIterator');

class ReviewReportDAO extends DAO {
	/**
	 * Get the review report data.
	 * @param $contextId int Context ID
	 * @return array
	 */
	function getReviewReport($contextId) {
		$locale = AppLocale::getLocale();

		import('lib.pkp.classes.db.DBRowIterator');
		$commentsReturner = new DBRowIterator($this->retrieve(
			'SELECT	submission_id,
				comments,
				author_id
			FROM	submission_comments
			WHERE	comment_type = ?',
			array(
				COMMENT_TYPE_PEER_REVIEW
			)
		));

		$userDao = DAORegistry::getDAO('UserDAO');
		$site = Application::get()->getRequest()->getSite();
		$sitePrimaryLocale = $site->getPrimaryLocale();

		$params = array_merge(
			array(
				$locale, // Submission title
				'title',
				'title',
			),
			$userDao->getFetchParameters(),
			array(
				'affiliation',
				'affiliation',
				$sitePrimaryLocale,
				'orcid',
				(int) $contextId
			)
		);
		$reviewsReturner = new DBRowIterator($this->retrieve(
			'SELECT	r.stage_id AS stage_id,
				r.review_id as review_id,
				r.round AS round,
				COALESCE(asl.setting_value, aspl.setting_value) AS submission,
				a.submission_id AS submission_id,
				u.user_id AS reviewer_id,
				u.username AS reviewer,
				' . $userDao->getFetchColumns() .',
				u.email AS email,
				u.country AS country,
				us.setting_value AS orcid,
				COALESCE(uasl.setting_value, uas.setting_value) AS affiliation,
				r.date_assigned AS dateAssigned,
				r.date_notified AS dateNotified,
				r.date_confirmed AS dateConfirmed,
				r.date_completed AS dateCompleted,
				r.date_acknowledged AS dateAcknowledged,
				r.date_reminded AS dateReminded,
				r.date_due AS dateDue,
				r.date_response_due AS dateResponseDue,
				(r.declined=1) AS declined,
				(r.unconsidered=1) AS unconsidered,
				r.recommendation AS recommendation
			FROM	review_assignments r
				LEFT JOIN submissions a ON r.submission_id = a.submission_id
				LEFT JOIN publications p ON a.current_publication_id = p.publication_id
				LEFT JOIN publication_settings asl ON (p.publication_id = asl.publication_id AND asl.locale = ? AND asl.setting_name = ?)
				LEFT JOIN publication_settings aspl ON (p.publication_id = aspl.publication_id AND aspl.locale = p.locale AND aspl.setting_name = ?)
				LEFT JOIN users u ON (u.user_id = r.reviewer_id)
				' . $userDao->getFetchJoins() .'
				LEFT JOIN user_settings uas ON (u.user_id = uas.user_id AND uas.setting_name = ? AND uas.locale = a.locale)
				LEFT JOIN user_settings uasl ON (u.user_id = uasl.user_id AND uasl.setting_name = ? AND uasl.locale = ?)
				LEFT JOIN user_settings us ON (u.user_id = us.user_id AND us.setting_name = ?)
			WHERE	 a.context_id = ?
			ORDER BY submission',
			$params
		));

		import('lib.pkp.classes.user.InterestManager');
		$interestManager = new InterestManager();
		$assignedReviewerIds = new DBRowIterator($this->retrieve(
			'SELECT	r.reviewer_id
			FROM	review_assignments r
				LEFT JOIN submissions a ON r.submission_id = a.submission_id
			WHERE	 a.context_id = ?
			ORDER BY r.reviewer_id',
			array((int) $contextId)
		));
		$interests = array();
		while ($row = $assignedReviewerIds->next()) {
			if (!array_key_exists($row['reviewer_id'], $interests)) {
				$user = $userDao->getById($row['reviewer_id']);
				$reviewerInterests = $interestManager->getInterestsString($user);
				if (!empty($reviewerInterests))	$interests[$row['reviewer_id']] = $reviewerInterests;
			}
		}
		return array($commentsReturner, $reviewsReturner, $interests);
	}
}
