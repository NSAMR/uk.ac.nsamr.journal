<?php

/**
 * @file plugins/generic/usageStats/UsageStatsOptoutBlockPlugin.inc.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class UsageStatsOptoutBlockPlugin
 * @ingroup plugins_generic_usageStats
 *
 * @brief Opt-out component.
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class UsageStatsOptoutBlockPlugin extends BlockPlugin {
	/** @var UsageStatsPlugin */
	protected $_usageStatsPlugin;

	/**
	 * Constructor
	 * @param $usageStatsPlugin UsageStatsPlugin
	 */
	function __construct($usageStatsPlugin) {
		$this->_usageStatsPlugin = $usageStatsPlugin;
		parent::__construct();
	}

	/**
	 * @copydoc Plugin::getHideManagement()
	 */
	function getHideManagement() {
		return true;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return 'UsageStatsOptoutBlockPlugin';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.generic.usageStats.optout.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.usageStats.optout.description');
	}

	/**
	 * @copydoc Plugin::isSitePlugin()
	 */
	function isSitePlugin() {
		return false;
	}

	/**
	 * @copydoc Plugin::getPluginPath()
	 */
	public function getPluginPath() {
		return $this->_usageStatsPlugin->getPluginPath();
	}

	/**
	 * @copydoc BlockPlugin::getEnabled()
	 */
	function getEnabled($contextId = null) {
		return $this->_usageStatsPlugin->getEnabled($contextId);
	}

	/**
	 * @copydoc BlockPlugin::getContents()
	 */
	function getContents($templateMgr, $request = null) {
		return $templateMgr->fetch($this->getTemplateResource($this->getBlockTemplateFilename()));
	}

	/**
	 * copydoc BlockPlugin::getBlockTemplateFilename()
	 */
	function getBlockTemplateFilename() {
		// Return the opt-out template.
		return 'optoutBlock.tpl';
	}


}

