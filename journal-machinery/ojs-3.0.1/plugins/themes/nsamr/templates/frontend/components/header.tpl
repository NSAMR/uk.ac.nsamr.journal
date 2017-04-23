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

				<!--START STATIC NAVBAR-->
				<nav class="navbar navbar-default navbar-light navbar-static-top yamm ">
					<div class="container">
						<div class="navbar-header">
							
							<div id="socialbar" class="navbar-collapse collapse">
								{include file="frontend/components/socialNavMenu.tpl"}
							</div><!--/.nav-collapse -->
						</div><!--/.navbar-header -->
						<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#socialbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
						<div class="navbar-user pull-right">
							{include file="frontend/components/userButton.tpl"}
						</div>
						
					</div><!--/.container -->
				</nav><!--END STATIC NAVBAR-->



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


