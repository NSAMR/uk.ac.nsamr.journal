<?php

/**
 * @file pages/about/AboutContextHandler.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AboutContextHandler
 * @ingroup pages_about
 *
 * @brief Handle requests for context-level about functions.
 */

import('classes.handler.Handler');

class AboutContextHandler extends Handler {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
		AppLocale::requireComponents(LOCALE_COMPONENT_APP_COMMON);
	}

	/**
	 * @see PKPHandler::authorize()
	 */
	function authorize($request, &$args, $roleAssignments) {
		$context = $request->getContext();
		if (!$context || !$context->getSetting('restrictSiteAccess')) {
			$templateMgr = TemplateManager::getManager($request);
			$templateMgr->setCacheability(CACHEABILITY_PUBLIC);
		}

		import('lib.pkp.classes.security.authorization.ContextRequiredPolicy');
		$this->addPolicy(new ContextRequiredPolicy($request));
		return parent::authorize($request, $args, $roleAssignments);
	}

	/**
	 * Display about page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/about.tpl');
	}

	/**
	 * Display FAQ page -- TODO This is currently a placeholder, ALso: HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function faqs($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/placeholder.tpl');
	}

	/**
	 * Display placeholder page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function placeholder($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/placeholder.tpl');
	}

	/**
	 * Display hosting page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function hosting($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/hosting.tpl');
	}

	/**
	 * Display Submission Process page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function submissionprocess($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/submissionprocess.tpl');
	}

	/**
	 * Display User Guides page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function guides($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/guides-head.tpl');
	}

	/**
	 * Display manuscript guide page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function manuscriptguidance($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/manuscriptguidance.tpl');
	}

	/**
	 * Display policies page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function policies($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/policies.tpl');
	}

	/**
	 * Display landing_author page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function landing_author($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/landing_author.tpl');
	}

	/**
	 * Display documentation_author page TODO HAXXXX
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function documentation_author($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/documentation_author.tpl');
	}

	/**
	 * Display editorialTeam page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function editorialTeam($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/editorialTeam.tpl');
	}

	/**
	 * Display submissions page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function submissions($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);

		$context = $request->getContext();
		$checklist = $context->getLocalizedSetting('submissionChecklist');
		if (!empty($checklist)) {
			ksort($checklist);
			reset($checklist);
		}

		$templateMgr->assign( 'submissionChecklist', $context->getLocalizedSetting('submissionChecklist') );

		$templateMgr->display('frontend/pages/submissions.tpl');
	}

	/**
	 * Display contact page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function contact($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$context = $request->getContext();
		$templateMgr->assign(array(
			'mailingAddress'     => $context->getSetting('mailingAddress'),
			'contactPhone'       => $context->getSetting('contactPhone'),
			'contactEmail'       => $context->getSetting('contactEmail'),
			'contactName'        => $context->getSetting('contactName'),
			'supportName'        => $context->getSetting('supportName'),
			'supportPhone'       => $context->getSetting('supportPhone'),
			'supportEmail'       => $context->getSetting('supportEmail'),
			'contactTitle'       => $context->getLocalizedSetting('contactTitle'),
			'contactAffiliation' => $context->getLocalizedSetting('contactAffiliation'),
		));
		$templateMgr->display('frontend/pages/contact.tpl');
	}
}

?>
