{**
	* templates/frontend/pages/indexJournal.tpl
	*
	* UPDATED/CHANGED/MODIFIED: Marc Behiels - marc@elemental.ca - 250416
	*
	* Copyright (c) 2014-2016 Simon Fraser University Library
	* Copyright (c) 2003-2016 John Willinsky
	* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
	*
	* @brief Display the index page for a journal
	*
	* @uses $currentJournal Journal This journal
	* @uses $journalDescription string Journal description from HTML text editor
	* @uses $homepageImage object Image to be displayed on the homepage
	* @uses $additionalHomeContent string Arbitrary input from HTML text editor
	* @uses $announcements array List of announcements
	* @uses $numAnnouncementsHomepage int Number of announcements to display on the
	*       homepage
	* @uses $issue Issue Current issue
	*}
	{include file="frontend/components/header-fullwidth.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

	<div class="page_index_site">



		<!---BODY OF THIS PAGE-->
<div class="fullwidthbanner">
	<div class="tp-banner">
		<ul>

			<!-- SLIDE -->
			<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Introducing JSAMR">
				<!-- MAIN IMAGE -->
				<img src="{$baseUrl}/plugins/themes/nsamr/templates/images/sliders/sky-1920x800.jpg"  alt="Slider 1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				<div class="caption slider-title dark sft"
					data-x="50"
					data-y="160"
					data-speed="1000"
					data-start="1000"
					data-easing="easeOutExpo">
				Introducing<br>
				<span class="colored-text">JSAMR</span>
				</div>
				<div class="caption slider-caption dark sfl"
					data-x="50"
					data-y="310"
					data-speed="1000"
					data-start="1800"
					data-easing="easeOutExpo">
					A peer-reviewed Open Access journal  <br>
					run by students and for students
				</div>
				<div class="caption sfb rev-buttons tp-resizeme"
					data-x="50"
					data-y="380"
					data-speed="500"
					data-start="1800"
					data-easing="Sine.easeOut">
					<a href="{url router=$smarty.const.ROUTE_PAGE page='about'}"><button class="btn btn-lg btn-learnmore">Learn more <i class="fa fa-angle-right"></i></button></a>
				</div>
			</li>

<!-- SLIDE -->
			<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Open Access">
				<!-- MAIN IMAGE -->
				<img src="{$baseUrl}/plugins/themes/nsamr/templates/images/sliders/road-1920x800.jpg"  alt="Slider 1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				<div class="caption slider-title dark sft"
				data-x="50"
				data-y="160"
				data-speed="1000"
				data-start="1000"
				data-easing="easeOutExpo">
				Open Access<br>
				<span class="colored-text">for Open Minds</span>
				</div>
				<div class="caption slider-caption dark sfl"
				data-x="50"
				data-y="310"
				data-speed="1000"
				data-start="1800"
				data-easing="easeOutExpo">
				Open Access is the bright future of academic publishing, allowing your<br>
				work to reach the widest possible audience
				</div>
				<div class="caption sfb rev-buttons tp-resizeme"
				data-x="50"
				data-y="380"
				data-speed="500"
				data-start="1800"
				data-easing="Sine.easeOut">
				<a href="{url router=$smarty.const.ROUTE_PAGE page='about'}"><button class="btn btn-lg btn-learnmore">Learn more <i class="fa fa-angle-right"></i></button></a>
				</div>
			</li>

			<!-- SLIDE -->
			<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Contribute now">
				<!-- MAIN IMAGE -->
				<img src="{$baseUrl}/plugins/themes/nsamr/templates/images/sliders/glasses-1920x800.jpg"  alt="Slider 1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				<div class="caption slider-title dark sft"
				data-x="50"
				data-y="160"
				data-speed="1000"
				data-start="1000"
				data-easing="easeOutExpo">
				Now accepting <br>
				<span class="colored-text">submissions</span>
				</div>
				<div class="caption slider-caption dark sfl"
				data-x="50"
				data-y="310"
				data-speed="1000"
				data-start="1800"
				data-easing="easeOutExpo">
				<br>
				Become part of something incredible
				</div>
				<div class="caption sfb rev-buttons tp-resizeme"
				data-x="50"
				data-y="380"
				data-speed="500"
				data-start="1800"
				data-easing="Sine.easeOut">
				<a href="{url router=$smarty.const.ROUTE_PAGE page='about'}"><button class="btn btn-lg btn-learnmore">Learn more <i class="fa fa-angle-right"></i></button></a>
				</div>
			</li>

		</ul>
	</div><!--tp banner-->
</div><!--full width banner-->
<!--revolution end-->


<!--call to action-->
<div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 60px 0 60px 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="cta-text">
					<h2>Submit your work today</h2>
					<p>
						Share your research with the largest community of medical student researchers in the UK, and start shaping the future of medical academia.
					</p>
				</div>
			</div>
			<div class="col-sm-4 text-right">
				<div class="space20"></div>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="login"}"  class="btn btn-lg btn-action">Submit a paper <i class="fa fa-edit"></i></a>
			</div>
		</div>
	</div>
</div>
<!--end call to action-->

<div class="space40"></div> 

<!--service boxes-->
<div class="container ">
	<div class="row">
		<div class="col-md-3">
			<div class="service-box wow animated fadeIn" data-wow-delay="1s">
				<i class="fa fa-users color-1"></i>
				<h4>Who are we?</h4>
				<p>
					JSAMR is part of the <b>National Student Association of Medical Research</b>, a non-profit, non-governmental and non-partisan <b>student-led</b> organisation representing medical school research societies nationally. <a href="http://www.nsamr.org">NSAMR</a> is registered with the Charity Commission (<a href="http://apps.charitycommission.gov.uk/Showcharity/RegisterOfCharities/CharityFramework.aspx?RegisteredCharityNumber=1169158&SubsidiaryNumber=0">Reg. 1169158</a>). Our core principles include the promotion of opportunites in academia for medical students, with a focus on <b>Openness and transparency</b>. Everything we publish is licenced under Creative Commons <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY Attribution 4.0</a>
				</p>
			</div>
		</div><!--service column-->
		<div class="col-md-3">
			<div class="service-box wow animated fadeIn" data-wow-delay="0.2s">
				<i class="fa fa-paper-plane color-3"></i>
				<h4>What do we publish?</h4>
				<p>
					We will publish <b>articles</b> covering experimental writeups or <b>critical reviews</b>, <b>letters</b>, <b>case reports</b>, <b>abstracts</b> or <b>posters</b> on any topic related to academic or clinical medicine, provided that the quality is high enough. We are proud to consider writeups of <b>pilot projects</b> with small data sets, <b>negative results</b>, and <b>work in progress</b>.              
				</p>
				
			</div>
		</div><!--service column-->
		<div class="col-md-3">
			<div class="service-box wow animated fadeIn" data-wow-delay="0.3s">
				<i class="fa fa-pencil color-2"></i>
				<h4>Why publish with us?</h4>
				<p>
					<b>No more waiting</b> for lengthy review processes, only to have your work sold back to you via an expensive subscription. Furthermore, even though we are an <b>Open Access</b> journal, there are <b>no publication fees, ever</b>. We aim for your review process to be completed in <b>under three weeks</b>, and you will see your article online <b>within 72 hours</b> of it being accepted. Our dedicated peer-reviewing team guarantee a fast turnaround from submission to publication, with no compromise on quality.
				</p>
				
			</div>
		</div><!--service column-->
		<div class="col-md-3">
			<div class="service-box wow animated fadeIn" data-wow-delay="0.4s">
				<i class="fa fa-book color-4"></i>
				<h4>Become a peer-reviewer</h4>
				<p>
					We are always looking for talented and committed peer-reviewers for JSAMR. We offer <b>full training</b> in academic critical appraisal and the review process, and <b>your reviews will be published</b> alongside accepted articles in line with our policy on Openness. Click <a href="http://journal.nsamr.org/peer-review/">here</a> for more information, and to apply to join our team.
				</p>
			</div>
		</div><!--service column-->
	</div>
</div>

<!--end service boxes-->

<div class="space40"></div> 

<!--LLAMA-->
<div class="archives-info" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brickwall_@2X.png') repeat; padding: 60px 0;">
	<div class="container">
		<div class="row events-row">
			<div class="col-md-9">
				<div>
					<h4>Recent articles</h4>
				</div>
				<div class="side-event clearfix">
					<div class="s-event-date">
						<span>Issue </span>
						2017
					</div>
					<div class="s-event-content">
						<h5> <a href="#">
							Submit now to see your work here 
						</a></h5>
						<p><i class="fa fa-user"></i> <strong>A. N. Other, S-O Else, author, author, author</strong></p>
						<p><i class="fa fa-file-text"></i> <strong>Cardiovascular section</strong></p>
						<p>
							[ABSTRACT] Donec commodo felis nec eros mollis dignissim. Pellentesque scelerisque nisl eu erat condimentum, at pellentesque odio elementum. Praesent accumsan non quam vel vulputate. Nullam ac hendrerit quam, ut tincidunt felis. Praesent condimentum ut enim ut mattis.
						</p>
						<ul class="list-inline tag-list">
							<li><a href="#">Key word</a></li>
							<li><a href="#">Open Access</a></li>
							<li><a href="#">Publish</a></li>
						</ul>
					</div>
				</div><!--event col end-->
				<hr>
				<div class="side-event clearfix">
					<div class="s-event-date">
						<span>Issue </span>
						2017
					</div>
					<div class="s-event-content">
						<h5> <a href="#">
							Submit now to see your work here 
						</a></h5>
						<p><i class="fa fa-user"></i> <strong>A. N. Other, S-O Else, author, author, author</strong></p>
						<p><i class="fa fa-file-text"></i> <strong>Neurology section</strong></p>
						<p>
							[ABSTRACT] Donec commodo felis nec eros mollis dignissim. Pellentesque scelerisque nisl eu erat condimentum, at pellentesque odio elementum. Praesent accumsan non quam vel vulputate. Nullam ac hendrerit quam, ut tincidunt felis. Praesent condimentum ut enim ut mattis.
						</p>
						<ul class="list-inline tag-list">
							<li><a href="#">Open Access</a></li>
							<li><a href="#">Key words</a></li>
							<li><a href="#">Publish</a></li>
						</ul>
					</div>
				</div><!--event col end-->
				<hr>


			</div>
			<div class="col-md-3 margin-btm-40">
				<div class="sidebar-widget">
					<h3>Archives</h3>
					<ul class="list-unstyled">
						<li><a href="#">Coming Soon </a></li>
					</ul>
				</div><!--sidebar widget end-->

				<div class="sidebar-widget">
					<h3>Tag Cloud</h3>
					<ul class="list-inline tag-list">
						<li><a href="#">Coming Soon</a></li>

					</ul>
				</div><!--sidebar widget end-->
			</div>
		</div>
	</div>
</div>
<!--end LLAMA-->


{include file="frontend/components/cta_mailingList.tpl"}



</div><!-- .page -->



{include file="frontend/components/footer.tpl"}






