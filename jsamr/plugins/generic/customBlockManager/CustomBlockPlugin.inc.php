<?php

/**
 * @file plugins/generic/customBlockManager/CustomBlockPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.customBlockManager
 * @class CustomBlockPlugin
 *
 * A generic sidebar block that can be customized through the CustomBlockManagerPlugin
 *
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class CustomBlockPlugin extends BlockPlugin {
	/** @var string Name of this block plugin */
	var $_blockName;

	/** @var CustomBlockManagerPlugin Parent plugin */
	var $_parentPlugin;

	/**
	 * Constructor
	 * @param $blockName string Name of this block plugin.
	 * @param $parentPlugin CustomBlockManagerPlugin Custom block plugin management plugin.
	 */
	function __construct($blockName, $parentPlugin) {
		$this->_blockName = $blockName;
		$this->_parentPlugin = $parentPlugin;
		parent::__construct();
	}

	/**
	 * Get the management plugin
	 * @return CustomBlockManagerPlugin
	 */
	function getManagerPlugin() {
		return $this->_parentPlugin;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return $this->_blockName;
	}

	/**
	 * @copydoc Plugin::getPluginPath()
	 */
	function getPluginPath() {
		$plugin = $this->getManagerPlugin();
		return $plugin->getPluginPath();
	}

	/**
	 * @copydoc Plugin::getTemplatePath()
	 */
	function getTemplatePath($inCore = false) {
		$plugin = $this->getManagerPlugin();
		return $plugin->getTemplatePath($inCore);
	}

	/**
	 * @copydoc Plugin::getHideManagement()
	 */
	function getHideManagement() {
		return true;
	}

	/**
	 * @copydoc LazyLoadPlugin::getEnabled()
	 */
	function getEnabled($contextId = null) {
		if (!Config::getVar('general', 'installed')) return true;
		return parent::getEnabled($contextId);
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return $this->_blockName . ' ' . __('plugins.generic.customBlock.nameSuffix');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.customBlock.description');
	}

	/**
	 * @copydoc BlockPlugin::getContents()
	 */
	function getContents($templateMgr, $request = null) {
		$context = $request->getContext();
		$contextId = $context ? $context->getId() : 0;

		// Get the block contents.
		$customBlockContent = $this->getSetting($contextId, 'blockContent');
		$currentLocale = AppLocale::getLocale();
		$contextPrimaryLocale = $context?$context->getPrimaryLocale():$request->getSite()->getPrimaryLocale();

		$divCustomBlockId = 'customblock-'.preg_replace('/\W+/', '-', $this->getName());
		$templateMgr->assign('customBlockId', $divCustomBlockId);

		$content = $customBlockContent[$currentLocale] ? $customBlockContent[$currentLocale] : $customBlockContent[$contextPrimaryLocale];

		$templateMgr->assign('customBlockContent', $content);
		return parent::getContents($templateMgr, $request);

	}
}

