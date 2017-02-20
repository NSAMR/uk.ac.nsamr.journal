{**
  * templates/frontend/components/primaryNavMenu.tpl
  *
  * Copyright (c) 2014-2016 Simon Fraser University Library
  * Copyright (c) 2003-2016 John Willinsky
  * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
  *
  * Primary navigation menu list for OJS
  *}
  <ul class="nav navbar-nav navbar-right">
    <li><a href="{$homeUrl}">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">About JNSAMR</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Hosting</a></li>
      </ul>
    </li>

    <li>
      <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="current"}">
        {translate key="navigation.current"}
      </a>
    </li>
    <li class="dropdown">
      <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}">
        {translate key="navigation.archives"}
      </a>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submissions portal</a></li>
        <li><a href="authorpoliciesandguidelines.php">Author policies and guidelines</a></li>
        <li><a href="#">Reviewer guidelines</a></li>
        <li><a href="#">Become a peer-reviewer</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
    <li class="search-toggle"><a href="javascript:void(0)"><i class="fa fa-search"></i></a>
      <form class="search-form">
        <input type="text" class="form-control" placeholder="Search JNSAMR...">
      </form>
    </li>

  </ul>