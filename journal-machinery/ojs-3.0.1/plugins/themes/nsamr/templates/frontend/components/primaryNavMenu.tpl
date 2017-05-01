{**
  * templates/frontend/components/primaryNavMenu.tpl
  *
  * Copyright (c) 2014-2016 Simon Fraser University Library
  * Copyright (c) 2003-2016 John Willinsky
  * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
  *
  * Primary navigation menu list for OJS
  *}
  <ul class="nav navbar-nav navbar-right">`
    <li><a href="{$baseUrl}">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
      <ul class="dropdown-menu">

      {if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
      {include file="core:frontend/components/headerHead.tpl"}

        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about'}">
            {translate key="navigation.about"}
        </li>
      
        <li><a href="/journal/journal-index/placeholder.php">FAQ</a></li>
        <li><a href="/journal/journal-index/hosting.php">Hosting</a></li>
      </ul>
    </li>

    <li>
      <!--
      <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="current"}">
        {translate key="navigation.current"}
      </a>
      -->
      <a href="/journal/journal-index/placeholder.php">Current</a>

    </li>
    <li class="dropdown">
      <!-- <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}">
        {translate key="navigation.archives"}
      </a>
      -->
      <a href="/journal/journal-index/placeholder.php">Archives</a>

    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/journal/journal-index/howtosubmit.php">Submit Your Work</a></li>
        <li><a href="/journal/journal-index/pol-user-guide-tabs.php">User Guides</a></li>
        <li><a href="/journal/journal-index/pol-manuscript-guidance.php">Manuscript Guidance</a></li>
        <li><a href="/journal/journal-index/pol-head.php">Author and Reviewer Policies</a></li>
      </ul>
    </li>
    <li><a href="/journal/journal-index/contact.php">Contact</a></li>
  </ul>