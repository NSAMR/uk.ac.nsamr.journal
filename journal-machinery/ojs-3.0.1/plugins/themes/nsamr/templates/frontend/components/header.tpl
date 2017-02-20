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
							<div class="col-sm-6 hidden-xs">
								<span><i class="fa fa-phone"></i> +4400 0000 0000</span>
								<span><i class="fa fa-envelope"></i> journal@nsamr.ac.uk</span>
							</div>
							<div class="col-sm-6 text-right">

								<!--USER BUTTON-->
								<ul id="navigationUser" class="nav nav-pills tab-list pull-right" role="navigation" aria-label="{translate|escape key="common.navigation.user"}">
									{if $isUserLoggedIn}
									<li>
										<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
											{$loggedInUsername|escape}
											<span class="badge">
												{$unreadNotificationCount}
											</span>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											{if array_intersect(array(ROLE_ID_MANAGER, ROLE_ID_ASSISTANT, ROLE_ID_REVIEWER, ROLE_ID_AUTHOR), $userRoles)}
											<li>
												<a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
													{translate key="navigation.dashboard"}
													<span class="badge">
														{$unreadNotificationCount}
													</span>
												</a>
											</li>
											{/if}
											<li>
												<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">
													{translate key="common.viewProfile"}
												</a>
											</li>
											{if array_intersect(array(ROLE_ID_SITE_ADMIN), $userRoles)}
											<li>
												<a href="{if $multipleContexts}{url router=$smarty.const.ROUTE_PAGE context="index" page="admin" op="index"}{else}{url router=$smarty.const.ROUTE_PAGE page="admin" op="index"}{/if}">
													{translate key="navigation.admin"}
												</a>
											</li>
											{/if}
											<li>
												<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOut"}">
													{translate key="user.logOut"}
												</a>
											</li>
											{if $isUserLoggedInAs}
											<li>
												<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOutAsUser"}">
													{translate key="user.logOutAs"} {$loggedInUsername|escape}
												</a>
											</li>
											{/if}
										</ul>
									</li>
									{else}
									{if !$hideRegisterLink}
									<li><span><a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="register"}" class="btn btn-lg btn-action">{translate key="navigation.register"} <i class="fa fa-user"></i></a></span></li>
									{/if}
									<li><span><a href="{url router=$smarty.const.ROUTE_PAGE page="login"}"  class="btn btn-lg btn-action">{translate key="navigation.login"} <i class="fa fa-user"></i></span></a></li>
									{/if}
								</ul><!--END USER BUTTON-->

							</div>
						</div>
					</div>
				</div><!--END TOP BAR-->


				<!--START STATIC NAVBAR-->
				<nav class="navbar navbar-default navbar-static-top yamm">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand img-responsive" href="{$homeUrl}"><img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{else}alt="{translate key="common.pageHeaderLogo.altText"}"{/if}></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							{include file="frontend/components/primaryNavMenu.tpl"}	
						</div><!--/.nav-collapse -->
					</div><!--/.container -->
				</nav><!--END STATIC NAVBAR-->

				<!--START BAR BELOW NAVBAR-->
				<div class="pkp_structure_main" id="headerBelowNavbarContainer">
					{include file="frontend/components/headerBelowNavbar.tpl"}	
				</div><!--END BAR BELOW NAVBAR-->

			</header><!-- .pkp_structure_head -->


			{* Wrapper for page content and sidebars *}
			<div class="pkp_structure_content container">
				<main class="pkp_structure_main col-xs-12 col-sm-10 col-md-8" role="main">


