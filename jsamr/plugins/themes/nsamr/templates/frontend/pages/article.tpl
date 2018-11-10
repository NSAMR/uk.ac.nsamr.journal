{**
 * templates/frontend/pages/article.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view an article with all of it's details.
 *
 * @uses $article Article This article
 * @uses $issue Issue The issue this article is assigned to
 * @uses $section Section The journal section this article is assigned to
 * @uses $journal Journal The journal currently being viewed.
 *}
{include file="frontend/components/header-fullwidth.tpl" pageTitleTranslated=$article->getLocalizedTitle()|escape}

<!--call to action-->
<div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>{$issue->getIssueIdentification()}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end call to action-->

<!--breadcrumbs-->
{if $section}
	{include file="frontend/components/breadcrumbs_article.tpl" currentTitle=$section->getLocalizedTitle()}
{else}
	{include file="frontend/components/breadcrumbs_article.tpl" currentTitleKey="article.article"}
{/if}
<!--end breadcrumbs-->

<div class="space40"></div>

<div class="container page page_article">

	{* Show article overview *}
	{include file="frontend/objects/article_details.tpl"}

	{call_hook name="Templates::Article::Footer::PageFooter"}

</div><!-- .page -->

<div class="space40"></div>

<!--Call to action -->
{include file="frontend/components/cta_readytosubmit.tpl"}

<!--Call to action -->
{include file="frontend/components/cta_mailingList.tpl"}

<!--Standard footer -->
{include file="frontend/components/footer.tpl"}