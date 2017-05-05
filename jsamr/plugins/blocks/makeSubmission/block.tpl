{**
 * plugins/blocks/makeSubmission/block.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "Make a Submission" block.
 *}
<div class="pkp_block block_make_submission">
	<div class="content">
		<a class="block_make_submission_link" href="{url router=$smarty.const.ROUTE_PAGE page="about" op="submissions"}">
			{translate key="plugins.block.makeSubmission.linkLabel"}
		</a>
	</div>
</div>
