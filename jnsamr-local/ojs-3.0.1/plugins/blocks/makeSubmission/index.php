<?php

/**
 * @defgroup plugins_blocks_makeSubmission Make a Submission block plugin
 */

/**
 * @file plugins/blocks/makeSubmission/index.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_makeSubmission
 * @brief Wrapper for "Make a Submission" block plugin.
 *
 */

require_once('MakeSubmissionBlockPlugin.inc.php');

return new MakeSubmissionBlockPlugin();

?>
