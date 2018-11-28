{**
	* templates/frontend/pages/contact.tpl
	*
	* Copyright (c) 2014-2016 Simon Fraser University Library
	* Copyright (c) 2003-2016 John Willinsky
	* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
	*
	* @brief Display the page to view the press's contact details.
	*
	* @uses $currentContext Journal|Press The current journal or press
	* @uses $mailingAddress string Mailing address for the journal/press
	* @uses $contactName string Primary contact name
	* @uses $contactTitle string Primary contact title
	* @uses $contactAffiliation string Primary contact affiliation
	* @uses $contactPhone string Primary contact phone number
	* @uses $contactEmail string Primary contact email address
	* @uses $supportName string Support contact name
	* @uses $supportPhone string Support contact phone number
	* @uses $supportEmail string Support contact email address
	*}

	<!---STANDARD HEAD INFO AND NAV-->
	{include file="frontend/components/header-fullwidth.tpl" pageTitle="about.contact"}

	<!---BODY OF THIS PAGE-->


	<!--call to action-->
	<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="left-title-bar">
						<h2>Placeholder</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end call to action-->

	<!-- Breadcrumbs -->
	<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brickwall_@2X.png') repeat; padding: 10px 0 10px 0;" class="col-sm-12 hidden-xs text-right">
		<div class="container">
			<div class="row pull-right">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Placeholder</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->
	<div class="space40"></div>	

	<div class="page">
		<div class="container">
			<legend>
				Whoops...
			</legend>
			<div class="intro-text">
				We haven't finished making this page yet, but why don't you check out some of the stuff we <b>have</b> done?
			</div>
			<div class="space40"></div>
			{include file="frontend/pages/gettingStarted-meat.tpl"}
		</div><!--container-->
	</div><!-- .page -->

	<div class="space40"></div>

    <!--Call to action -->
    {include file="frontend/components/cta_readytosubmit.tpl"}

    <!--Call to action -->
    {include file="frontend/components/cta_mailingList.tpl"}

	<!---PAGE FOOTER AND SCRIPTS-->
	{include file="frontend/components/footer.tpl"}
