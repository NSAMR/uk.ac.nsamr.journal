{**
 * plugins/generic/lensGalley/articleGalley.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a JATS XML galley.
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$article->getLocalizedTitle()|escape}

<div class="page">
	{capture assign="xmlUrl"}{strip}
		{if $isLatestPublication}
			{url op="download" path=$bestId|to_array:$galley->getBestGalleyId($currentJournal):$galleyFile->getId() escape=false}
		{else}
			{url op="download" path=$bestId|to_array:'version':$galleyPublication->getId():$galley->getBestGalleyId($currentJournal):$galleyFile->getId() escape=false}
		{/if}
	{/strip}{/capture}
	{include file=$displayTemplatePath xmlUrl=$xmlUrl}
</div>

{include file="frontend/components/footer.tpl"}
