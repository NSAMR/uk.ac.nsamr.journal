{**
 * plugins/blocks/makeSubmission/templates/block.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "Make a Submission" block.
 *}
<div class="pkp_block block_make_submission">
	<h2 class="pkp_screen_reader">
		{translate key="plugins.block.makeSubmission.linkLabel"}
	</h2>

	<div class="content">
		<a class="block_make_submission_link" href="{url router=$smarty.const.ROUTE_PAGE page="about" op="submissions"}">
			{translate key="plugins.block.makeSubmission.linkLabel"}
		</a>
	</div>
</div>
