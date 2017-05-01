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
	<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-E8EBEE-1920x1080.png') repeat; padding: 10px 0 10px 0;" class="col-sm-12 hidden-xs text-right">
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
			
				<div class="intro-text">
					Send us a message, and our JSAMR elves will get back to you as soon as possible
				</div>
			
			<form id="contact-form" method="post" action="contactform.php" role="form">
				<div class="controls">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_lastname">Your name *</label>
								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_email">Your email address *</label>
								<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="form_message">Your message *</label>
								<textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<p class="text-muted"><strong>*</strong> These fields are required.</p>
						</div>

						<div class="col-xs-2 col-xs-offset-5">
							<input type="submit" class="btn btn-lg btn-action" value="Send message">
						</div>
					</div>
				</div>
			</form>
		</div><!--container-->

		<div class="space40"></div>
	</div><!-- .page -->

	<!---PAGE FOOTER AND SCRIPTS-->
	{include file="frontend/components/footer.tpl"}
