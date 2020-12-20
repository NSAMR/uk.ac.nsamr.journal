<?php

/**
 * @file plugins/generic/customBlockManager/CustomBlockManagerPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.customBlockManager
 * @class CustomBlockManagerPlugin
 *
 * Plugin to let managers add and delete custom sidebar blocks
 *
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class CustomBlockManagerPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.generic.customBlockManager.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.customBlockManager.description');
	}

	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			// If the system isn't installed, or is performing an upgrade, don't
			// register hooks. This will prevent DB access attempts before the
			// schema is installed.
			if (!Config::getVar('general', 'installed') || defined('RUNNING_UPGRADE')) return true;

			if ($this->getEnabled($mainContextId)) {
				$this->import('CustomBlockPlugin');

				// Ensure that there is a context (journal or press)
				if ($request = Application::get()->getRequest()) {
					if ($mainContextId) {
						$contextId = $mainContextId;
					} else {
						$context = $request->getContext();
						$contextId = $context ? $context->getId() : CONTEXT_SITE;
					}

					// Load the custom blocks we have created
					$blocks = $this->getSetting($contextId, 'blocks');
					if (!is_array($blocks)) $blocks = array();

					// Loop through each custom block and register it
					$i=0;
					foreach ($blocks as $block) {
						PluginRegistry::register(
							'blocks',
							new CustomBlockPlugin($block, $this),
							$this->getPluginPath()
						);
					}
				}

				// This hook is used to register the components this plugin implements to
				// permit administration of custom block plugins.
				HookRegistry::register('LoadComponentHandler', array($this, 'setupGridHandler'));
			}
			return true;
		}
		return false;
	}

	/**
	 * Permit requests to the custom block grid handler
	 * @param $hookName string The name of the hook being invoked
	 * @param $args array The parameters to the invoked hook
	 */
	function setupGridHandler($hookName, $params) {
		$component =& $params[0];
		if ($component == 'plugins.generic.customBlockManager.controllers.grid.CustomBlockGridHandler') {
			define('CUSTOMBLOCKMANAGER_PLUGIN_NAME', $this->getName());
			return true;
		}
		return false;
	}

	/**
	 * @copydoc Plugin::getActions()
	 */
	function getActions($request, $actionArgs) {
		import('lib.pkp.classes.linkAction.request.AjaxModal');
		$router = $request->getRouter();
		return array_merge(
			$this->getEnabled()?array(
				new LinkAction(
					'settings',
					new AjaxModal(
						$router->url(
							$request, null, null, 'manage', null, array(
								'plugin' => $this->getName(),
								'category' => $this->getCategory(),
								'action' => 'index'
							)
						),
						$this->getDisplayName()
					),
					__('plugins.generic.customBlockManager.manage'),
					null
				)
			):array(),
			parent::getActions($request, $actionArgs)
		);
	}

	/**
	 * @copydoc Plugin::manage()
	 */
	function manage($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$dispatcher = $request->getDispatcher();
		return $templateMgr->fetchAjax(
			'customBlockGridUrlGridContainer',
			$dispatcher->url(
				$request, ROUTE_COMPONENT, null,
				'plugins.generic.customBlockManager.controllers.grid.CustomBlockGridHandler', 'fetchGrid'
			)
		);
	}

	/**
	 * This plugin can be used site-wide or in a specific context. The
	 * isSitePlugin check is used to grant access to different users, so this
	 * plugin must return true only if the user is currently in the site-wide
	 * context.
	 *
	 * @see PluginGridRow::_canEdit()
	 * @return boolean
	 */
	function isSitePlugin() {
		return !Application::get()->getRequest()->getContext();
	}
}
