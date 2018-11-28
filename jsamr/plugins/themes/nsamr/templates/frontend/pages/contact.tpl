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
						<h2>Contact</h2>
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
					<li>Contact</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->

	<div class="page page_contact">

		<div class="container">
			<div class="space40"></div>
			<legend>
				<i class="fa fa-envelope-o fa-2x margin20"></i> Send us a message, and our JSAMR elves will get back to you as soon as possible.
			</legend>

			<div class="intro-text">
				<ul>
				 	<li id="#journal"></li>
					<li id="#it"></li>
				</ul>
			</div>
			<p>(don't worry, those links are generated via JS and aren't readable by bots).
		</div><!--container-->
		<div class="space40"></div>
	</div><!-- .page -->


	{include file="frontend/components/cta_mailingList.tpl"}


	<!---PAGE FOOTER AND SCRIPTS-->
	{include file="frontend/components/footer.tpl"}


	<script language="JavaScript">
		var journal = "journal";
		var it = "it";
		var domain = "nsamr.ac.uk";
		var journal_linktext = journal + "@" + domain ;
		var it_linktext = it + "@" + domain ;
		document.getElementById("#journal").innerHTML = "<a href='" + "mail" + "to:" + journal + "@" + domain + "'>" + journal_linktext + "</a>";
		document.getElementById("#it").innerHTML = "<a href='" + "mail" + "to:" + it + "@" + domain + "'>" + it_linktext + "</a>";
		
	</script>

