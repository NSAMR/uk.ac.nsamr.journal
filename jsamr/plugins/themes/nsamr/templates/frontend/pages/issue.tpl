{**
 * templates/frontend/pages/issue.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display a landing page for a single issue. It will show the table of contents
 *  (toc) or a cover image, with a click through to the toc.
 *
 * @uses $issue Issue The issue
 * @uses $issueIdentification string Label for this issue, consisting of one or
 *       more of the volume, number, year and title, depending on settings
 * @uses $issueGalleys array Galleys for the entire issue
 * @uses $showGalleyLinks bool Show galley links to users without access?
 *}

 <!---STANDARD HEAD INFO AND NAV-->
{include file="frontend/components/header-fullwidth.tpl" pageTitleTranslated=$issueIdentification}

<div class="page_index_site">

	<!--call to action-->
	<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="left-title-bar">
						<h2>Issue Title</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end call to action-->

	<div id="main-content" class="page page_issue page_index_site">

		{* Display a message if no current issue exists *}
		{if !$issue}
			{include file="frontend/components/breadcrumbs_issue.tpl" currentTitleKey="current.noCurrentIssue"}
			{include file="frontend/components/notification.tpl" type="warning" messageKey="current.noCurrentIssueDesc"}

		{* Display an issue with the Table of Contents *}
		{else}
			{include file="frontend/components/ctaBar.tpl"}
			{include file="frontend/components/breadcrumbs_issue.tpl" currentTitle=$issueIdentification}
			{include file="frontend/objects/issue_toc.tpl"}
		{/if}

	</div>
</div>

