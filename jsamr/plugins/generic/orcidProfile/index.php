<?php

/**
 * @defgroup plugins_generic_orcidProfile
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2015-2019 University of Pittsburgh
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_orcidProfile
 * @brief Wrapper for ORCID Profile plugin.
 *
 */

require_once('OrcidProfilePlugin.inc.php');

return new OrcidProfilePlugin();

