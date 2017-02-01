{**
 * templates/frontend/components/searchForm_simple.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Simple display of a search form with just text input and search button
 *
 * @uses $searchQuery string Previously input search query
 *}
{if !$currentJournal || $currentJournal->getSetting('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}

<div class="col-md-2 pull-md-right">
							<li class="search-toggle"><a href="javascript:void(0)"><i class="fa fa-search"></i></a>
						        <form class="search-form">
						            <input type="text" class="form-control" placeholder="Search JNSAMR...">
						        </form>
						    </li>
						</div>


{/if}