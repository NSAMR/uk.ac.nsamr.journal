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
						<h2>Hosting</h2>
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
					<li>Hosting</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->
	<div class="space40"></div>	

	<div class="page page_contact">

		<div class="container">
			
			<div class="col-md-4">
				<a href="https://www.mythic-beasts.com/"><img src="{$baseUrl}/plugins/themes/nsamr/templates/images/logos/mythicbeasts.png" class="img-responsive" alt=""></a>
			</div>
			<div class="intro-text col-md-8">
				JSAMR is proud to be hosted on a shell account with <a href="https://www.mythic-beasts.com/">Mythic Beasts</a>, who have provided us with consistently excellent service. We appreciate their kind support of research, Open, and not-for-profits.
			</div>
			
		</div><!--container-->

		<div class="space40"></div>
	</div><!-- .page -->

	<!---PAGE FOOTER AND SCRIPTS-->
	{include file="frontend/components/footer.tpl"}
