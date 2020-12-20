<?php

/**
 * @file plugins/generic/lensGalley/LensGalleyPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class LensGalleyPlugin
 * @ingroup plugins_generic_lensGalley
 *
 * @brief Class for LensGalley plugin
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class LensGalleyPlugin extends GenericPlugin {
	/**
	 * @copydoc LazyLoadPlugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			if ($this->getEnabled()) {
				HookRegistry::register('ArticleHandler::view::galley', array($this, 'articleCallback'));
				HookRegistry::register('IssueHandler::view::galley', array($this, 'issueCallback'));
				HookRegistry::register('ArticleHandler::download', array($this, 'articleDownloadCallback'), HOOK_SEQUENCE_LATE);
			}
			return true;
		}
		return false;
	}

	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.generic.lensGalley.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.generic.lensGalley.description');
	}

	/**
	 * Callback that renders the article galley.
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function articleCallback($hookName, $args) {
		$request =& $args[0];
		$issue =& $args[1];
		$galley =& $args[2];
		$submission =& $args[3];

		$templateMgr = TemplateManager::getManager($request);
		if ($galley && in_array($galley->getFileType(), array('application/xml', 'text/xml'))) {
			$galleyPublication = null;
			foreach ($submission->getData('publications') as $publication) {
				if ($publication->getId() === $galley->getData('publicationId')) {
					$galleyPublication = $publication;
					break;
				}
			}
			$templateMgr->assign(array(
				'pluginLensPath' => $this->getLensPath($request),
				'displayTemplatePath' => $this->getTemplateResource('display.tpl'),
				'pluginUrl' => $request->getBaseUrl() . '/' . $this->getPluginPath(),
				'galleyFile' => $galley->getFile(),
				'issue' => $issue,
				'article' => $submission,
				'bestId' => $submission->getBestId(),
				'isLatestPublication' => $submission->getData('currentPublicationId') === $galley->getData('publicationId'),
				'galleyPublication' => $galleyPublication,
				'galley' => $galley,
				'jQueryUrl' => $this->_getJQueryUrl($request),
			));
			$templateMgr->display($this->getTemplateResource('articleGalley.tpl'));
			return true;
		}

		return false;
	}

	/**
	 * Callback that renders the issue galley.
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function issueCallback($hookName, $args) {
		$request =& $args[0];
		$issue =& $args[1];
		$galley =& $args[2];

		$templateMgr = TemplateManager::getManager($request);
		if ($galley && in_array($galley->getFileType(), array('application/xml', 'text/xml'))) {
			$templateMgr->assign(array(
				'pluginLensPath' => $this->getLensPath($request),
				'displayTemplatePath' => $this->getTemplateResource('display.tpl'),
				'pluginUrl' => $request->getBaseUrl() . '/' . $this->getPluginPath(),
				'galleyFile' => $galley->getFile(),
				'issue' => $issue,
				'galley' => $galley,
				'jQueryUrl' => $this->_getJQueryUrl($request),
			));
			$templateMgr->addJavaScript(
				'jquery',
				$jquery,
				array(
					'priority' => STYLE_SEQUENCE_CORE,
					'contexts' => 'frontend',
				)
			);
			$templateMgr->display($this->getTemplateResource('issueGalley.tpl'));
			return true;
		}

		return false;
	}

	/**
	 * Get the URL for JQuery JS.
	 * @param $request PKPRequest
	 * @return string
	 */
	private function _getJQueryUrl($request) {
		$min = Config::getVar('general', 'enable_minified') ? '.min' : '';
		if (Config::getVar('general', 'enable_cdn')) {
			return '//ajax.googleapis.com/ajax/libs/jquery/' . CDN_JQUERY_VERSION . '/jquery' . $min . '.js';
		} else {
			return $request->getBaseUrl() . '/lib/pkp/lib/vendor/components/jquery/jquery' . $min . '.js';
		}
	}

	/**
	 * returns the base path for Lens JS included in this plugin.
	 * @param $request PKPRequest
	 * @return string
	 */
	function getLensPath($request) {
		return $request->getBaseUrl() . '/' . $this->getPluginPath() . '/lib/lens';
	}

	/**
	 * Present rewritten XML.
	 * @param string $hookName
	 * @param array $args
	 */
	function articleDownloadCallback($hookName, $args) {
		$article =& $args[0];
		$galley =& $args[1];
		$fileId =& $args[2];
		$request = Application::get()->getRequest();

		if ($galley && in_array($galley->getFileType(), array('application/xml', 'text/xml')) && $galley->getFileId() == $fileId) {
			if (!HookRegistry::call('LensGalleyPlugin::articleDownload', array($article,  &$galley, &$fileId))) {
				$xmlContents = $this->_getXMLContents($request, $galley);
				header('Content-Type: application/xml');
				header('Content-Length: ' . strlen($xmlContents));
				header('Content-Disposition: inline');
				header('Cache-Control: private');
				header('Pragma: public');
				echo $xmlContents;
				$returner = true;
				HookRegistry::call('LensGalleyPlugin::articleDownloadFinished', array(&$returner));
			}
			return true;
		}

		return false;
	}

	/**
	 * Return string containing the contents of the XML file.
	 * This function performs any necessary filtering, like image URL replacement.
	 * @param $request PKPRequest
	 * @param $galley ArticleGalley
	 * @return string
	 */
	function _getXMLContents($request, $galley) {
		$journal = $request->getJournal();
		$submissionFile = $galley->getFile();
		$contents = file_get_contents($submissionFile->getFilePath());

		// Replace media file references
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		import('lib.pkp.classes.submission.SubmissionFile'); // Constants
		$embeddableFiles = array_merge(
			$submissionFileDao->getLatestRevisions($submissionFile->getData('submissionId'), SUBMISSION_FILE_PROOF),
			$submissionFileDao->getLatestRevisionsByAssocId(ASSOC_TYPE_SUBMISSION_FILE, $submissionFile->getFileId(), $submissionFile->getData('submissionId'), SUBMISSION_FILE_DEPENDENT)
		);
		$referredArticle = $referredPublication = null;
		$submissionDao = DAORegistry::getDAO('SubmissionDAO');
		$publicationService = Services::get('publication');
		foreach ($embeddableFiles as $embeddableFile) {
			// Ensure that the $referredArticle object refers to the article we want
			if (!$referredArticle || !$referredPublication || $referredPublication->getData('submissionId') != $referredArticle->getId() || $referredPublication->getId() != $galley->getData('publicationId')) {
				$referredPublication = $publicationService->get($galley->getData('publicationId'));
				$referredArticle = $submissionDao->getById($referredPublication->getData('submissionId'));
			}
			$fileUrl = $request->url(null, 'article', 'download', array($referredArticle->getBestArticleId(), $galley->getBestGalleyId(), $embeddableFile->getFileId()));
			$pattern = preg_quote($embeddableFile->getOriginalFileName());

			$contents = preg_replace(
				$pattern='/([Ss][Rr][Cc]|[Hh][Rr][Ee][Ff]|[Dd][Aa][Tt][Aa])\s*=\s*"([^"]*' . $pattern . ')"/',
				'\1="' . $fileUrl . '"',
				$contents
			);
			if ($contents === null) error_log('PREG error in ' . __FILE__ . ' line ' . __LINE__ . ': ' . preg_last_error());
		}

		// Perform replacement for ojs://... URLs
		$contents = preg_replace_callback(
			'/(<[^<>]*")[Oo][Jj][Ss]:\/\/([^"]+)("[^<>]*>)/',
			array($this, '_handleOjsUrl'),
			$contents
		);
		if ($contents === null) error_log('PREG error in ' . __FILE__ . ' line ' . __LINE__ . ': ' . preg_last_error());

		// Perform variable replacement for journal, issue, site info
		$issueDao = DAORegistry::getDAO('IssueDAO');
		$issue = $issueDao->getBySubmissionId($galley->getData('submissionId'));

		$journal = $request->getJournal();
		$site = $request->getSite();

		$paramArray = array(
			'issueTitle' => $issue?$issue->getIssueIdentification():__('editor.article.scheduleForPublication.toBeAssigned'),
			'journalTitle' => $journal->getLocalizedName(),
			'siteTitle' => $site->getLocalizedTitle(),
			'currentUrl' => $request->getRequestUrl(),
		);

		foreach ($paramArray as $key => $value) {
			$contents = str_replace('{$' . $key . '}', $value, $contents);
		}

		return $contents;
	}

	function _handleOjsUrl($matchArray) {
		$request = Application::get()->getRequest();
		$url = $matchArray[2];
		$anchor = null;
		if (($i = strpos($url, '#')) !== false) {
			$anchor = substr($url, $i+1);
			$url = substr($url, 0, $i);
		}
		$urlParts = explode('/', $url);
		if (isset($urlParts[0])) switch(strtolower_codesafe($urlParts[0])) {
			case 'journal':
				$url = $request->url(
				isset($urlParts[1]) ?
				$urlParts[1] :
				$request->getRequestedJournalPath(),
				null,
				null,
				null,
				null,
				$anchor
				);
				break;
			case 'article':
				if (isset($urlParts[1])) {
					$url = $request->url(
							null,
							'article',
							'view',
							$urlParts[1],
							null,
							$anchor
					);
				}
				break;
			case 'issue':
				if (isset($urlParts[1])) {
					$url = $request->url(
							null,
							'issue',
							'view',
							$urlParts[1],
							null,
							$anchor
					);
				} else {
					$url = $request->url(
							null,
							'issue',
							'current',
							null,
							null,
							$anchor
					);
				}
				break;
			case 'sitepublic':
				array_shift($urlParts);
				import ('classes.file.PublicFileManager');
				$publicFileManager = new PublicFileManager();
				$url = $request->getBaseUrl() . '/' . $publicFileManager->getSiteFilesPath() . '/' . implode('/', $urlParts) . ($anchor?'#' . $anchor:'');
				break;
			case 'public':
				array_shift($urlParts);
				$journal = $request->getJournal();
				import ('classes.file.PublicFileManager');
				$publicFileManager = new PublicFileManager();
				$url = $request->getBaseUrl() . '/' . $publicFileManager->getContextFilesPath($journal->getId()) . '/' . implode('/', $urlParts) . ($anchor?'#' . $anchor:'');
				break;
		}
		return $matchArray[1] . $url . $matchArray[3];
	}
}

?>
