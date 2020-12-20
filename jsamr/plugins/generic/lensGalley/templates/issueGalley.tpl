{**
 * plugins/generic/lensGalley/issueGalley.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a JATS XML galley.
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$issue->getIssueSeries()|escape}

<div class="page">
	{capture assign="xmlUrl"}{url op="download" path=$issue->getBestIssueId($currentJournal)|to_array:$galley->getBestGalleyId($currentJournal) escape=false}{/capture}
	{include file=$displayTemplateResource xmlUrl=$xmlUrl}
</div>

{include file="frontend/components/footer.tpl"}
