{**
	* lib/pkp/templates/frontend/components/header.tpl
	*
	* Copyright (c) 2014-2016 Simon Fraser University Library
	* Copyright (c) 2003-2016 John Willinsky
	* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
	*
	* @brief Common frontend site header.
	*
	* @uses $isFullWidth bool Should this page be displayed without sidebars? This
	*       represents a page-level override, and doesn't indicate whether or not
	*       sidebars have been configured for thesite.
	*}

	{* Determine whether a logo or title string is being displayed *}
	{assign var="showingLogo" value=true}
	{if $displayPageHeaderTitle && !$displayPageHeaderLogo && is_string($displayPageHeaderTitle)}
	{assign var="showingLogo" value=false}
	{/if}

	<!DOCTYPE html>
	<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
	{if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
	{include file="core:frontend/components/headerHead.tpl"}
	<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}">
		<div class="pkp_structure_page">

			<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
				<h2 id="accessible-menu-label">
					{translate|escape key="plugins.themes.bootstrap3.accessible_menu.label"}
				</h2>
				<ul>
					<li><a href="#main-navigation">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_navigation"}</a></li>
					<li><a href="#main-content">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.main_content"}</a></li>
					<li><a href="#sidebar">{translate|escape key="plugins.themes.bootstrap3.accessible_menu.sidebar"}</a></li>
				</ul>
			</nav>

			{* Header *}
			<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">


		        <!--TOP BAR-->
		        <div class="top-bar dark">
		            <div class="container">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <ul class="list-inline">                           
		                            <li>
		                                <a href="https://www.facebook.com/NSAMRStudent/" class="social-icon si-dark si-gray-round si-colored-facebook">
		                                    <i class="fa fa-facebook"></i>
		                                    <i class="fa fa-facebook"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://twitter.com/nsamr?lang=en" class="social-icon si-dark si-gray-round si-colored-twitter">
		                                    <i class="fa fa-twitter"></i>
		                                    <i class="fa fa-twitter"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.youtube.com/channel/UC8cJMUFNymJG0QoI73V7vZA" class="social-icon si-dark si-gray-round si-colored-google-plus">
		                                    <i class="fa fa-youtube"></i>
		                                    <i class="fa fa-youtube"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.linkedin.com/company/national-student-association-of-medical-research-nsamr-" class="social-icon si-dark si-gray-round si-colored-linkedin">
		                                    <i class="fa fa-linkedin"></i>
		                                    <i class="fa fa-linkedin"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://github.com/NSAMR" class="social-icon si-dark si-gray-round si-colored-github">
		                                    <i class="fa fa-github"></i>
		                                    <i class="fa fa-github"></i>
		                                </a>
		                            </li> 
		                        </ul>
		                    </div>
		                    <div class="col-sm-6 text-right">
		                        <ul id="navigationUser" class="nav nav-reginald nav-pills tab-list pull-right" role="navigation" aria-label="User Navigation">
		                            <li><span><a href="/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr/user/register" class="btn btn-topbar btn-lg btn-action">Register <i class="fa fa-user"></i></a></span></li>
		                            <li><span><a href="/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr/login" class="btn btn-topbar btn-lg btn-action">Login <i class="fa fa-user"></i></a></span></li>
		                        </ul>
		                    </div>

		                </div>
		            </div>
		        </div><!--END TOP BAR-->




				<!--START STATIC NAVBAR-->
				<nav class="navbar navbar-default navbar-static-top yamm">
					<div class="container">
						<div class="navbar-header navbar-header-logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="/journal/journal-index/index.php"><img class="img-responsive" src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{else}alt="{translate key="common.pageHeaderLogo.altText"}"{/if}></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							{include file="frontend/components/primaryNavMenu.tpl"}	
						</div><!--/.nav-collapse -->
					</div><!--/.container -->
				</nav><!--END STATIC NAVBAR-->

			</header><!-- .pkp_structure_head -->


			{* Wrapper for page content and sidebars *}
			<div class="pkp_structure_content container">
				<main class="pkp_structure_main col-xs-12 col-sm-10 col-md-8" role="main">


