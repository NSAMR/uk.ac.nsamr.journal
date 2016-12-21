{**
 * plugins/generic/lensGalley/issueGalley.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a PDF galley.
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$issue->getIssueSeries()|escape}

<div class="page">
	{url|assign:"xmlUrl" op="download" path=$issue->getBestIssueId($currentJournal)|to_array:$galley->getBestGalleyId($currentJournal) escape=false}
	{include file="$pluginTemplatePath/display.tpl" xmlUrl=$xmlUrl}
</div>

{include file="frontend/components/footer.tpl"}
