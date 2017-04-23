<?php

/**
 * @file plugins/themes/default/NsamrThemePlugin.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class NsamrThemePlugin
 * @ingroup plugins_themes_default
 *
 * @brief Default theme
 */
import('lib.pkp.classes.plugins.ThemePlugin');

class NsamrThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('bootstrapthreethemeplugin');
        $this->modifyStyle('bootstrap', array('addLess' => array('styles/index.less')));

        // Load styles
		$this->addStyle('animate', 'nsamr/css/animate.css');
		$this->addStyle('jquery-YTPlayer', 'nsamr/css/jquery.mb.YTPlayer.css');
		$this->addStyle('revolution-slider', 'nsamr/css/revolution-slider.css');
		$this->addStyle('flexslider', 'nsamr/flexslider/flexslider.css');
		$this->addStyle('owl-carousel', 'nsamr/owl-carousel/owl.carousel.css');
		$this->addStyle('owl-theme', 'nsamr/owl-carousel/owl.theme.css');
		$this->addStyle('owl-transitions', 'nsamr/owl-carousel/owl.transitions.css');
		$this->addStyle('revolution-layers', 'nsamr/revolution/css/layers.css');
		$this->addStyle('revolution-navigation', 'nsamr/revolution/css/navigation.css');
		$this->addStyle('revolution-settings', 'nsamr/revolution/css/settings.css');
		$this->addStyle('rs-plugin-settings', 'nsamr/rs-plugin/css/settings.css');

		// Load js plugins
		$this->addScript('bootstrap', 'nsamr/bootstrap/js/bootstrap.min.js');
		$this->addScript('flexslider', 'nsamr/flexslider/jquery.flexslider-min.js');
		$this->addScript('bootstrap-hover-dropdown', 'nsamr/js/bootstrap-hover-dropdown.min.js');
		//$this->addScript('jquery', 'nsamr/js/jquery.min.js');
		$this->addScript('jquery-YTPlayer', 'nsamr/js/jquery.mb.YTPlayer.js');
		$this->addScript('jquery-stellar', 'nsamr/js/jquery.stellar.min.js');
		$this->addScript('wow', 'nsamr/js/wow.min.js');
		$this->addScript('owl-carousel', 'nsamr/owl-carousel/owl.carousel.min.js');	
		$this->addScript('revolution-enablelog', 'nsamr/revolution/js/jquery.themepunch.enablelog.js');
		$this->addScript('revolution-revolution', 'nsamr/revolution/js/jquery.themepunch.revolution.min.js');
		$this->addScript('revolution-tools', 'nsamr/revolution/js/jquery.themepunch.tools.min.js');

		$this->addScript('rs-plugin-enablelog', 'nsamr/rs-plugin/js/jquery.themepunch.enablelog.js');
		$this->addScript('rs-plugin-revolution', 'nsamr/rs-plugin/js/jquery.themepunch.revolution.min.js');
		$this->addScript('rs-plugin-tools', 'nsamr/rs-plugin/js/jquery.themepunch.tools.min.js');

		$this->addScript('custom', 'nsamr/js/custom.js');
		$this->addScript('revolution-custom', 'nsamr/js/revolution-custom.js');

	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.nsamr.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.nsamr.description');
	}
}

?>
