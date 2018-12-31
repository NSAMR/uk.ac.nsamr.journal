{**
 * templates/frontend/pages/issueArchive.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display a list of recent issues.
 *
 * @uses $issues Array Collection of issues to display
 *}
{capture assign="pageTitle"}
	{if $issues->getPageCount() > 0 && $issues->getPage() > 1}
		{translate key="archive.archivesPageNumber" pageNumber=$issues->getPage()}
	{else}
		{translate key="archive.archives"}
	{/if}
{/capture}
{include file="frontend/components/header-fullwidth.tpl" pageTitleTranslated=$pageTitle}

<!--call to action-->
<div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>JSAMR Archives</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end call to action-->

{include file="frontend/components/breadcrumbs_archive.tpl" currentTitle=$pageTitle}
<div class="space40"></div>

<div class="space40"></div>
<div class="container page_issue_archive">
	<!-- Start about section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-title-bar">
                    <h2>Archived Issues</h2>
                </div>
                <div class="space20"></div>
                <p>
	                {* No issues have been published *}
					{if !$issues}
						<!--{translate key="current.noCurrentIssueDesc"} HAXXXX-->
						<div class="space20"></div>
		                <p>We haven't published any Issues yet, but we will publish our first one very soon.</p>
		                <p>Sign up to our mailing list below to make sure you hear about our news!</p>
					{* List issues *}
					{else}
						<ul class="issues_archive">
							{iterate from=issues item=issue}
								<li>
									{include file="frontend/objects/issue_summary.tpl"}
								</li>
							{/iterate}
						</ul>

						{if $issues->getPageCount() > 0}
							<div class="cmp_pagination">
								{page_info iterator=$issues}
								{page_links anchor="issues" name="issues" iterator=$issues}
							</div>
						{/if}
					{/if}
				</p>
            </div>
            <div class="col-md-6">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/blocks/manuscript-729617_1920.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div><!-- End container of top things -->
</div><!-- .page -->

<div class="space40"></div>

<!--Call to action -->
{include file="frontend/components/cta_readytosubmit.tpl"}

<!--Call to action -->
{include file="frontend/components/cta_mailingList.tpl"}

<!--Standard footer -->
{include file="frontend/components/footer.tpl"}