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
      <a href="" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about'}">About JSAMR</a></li>
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='faqs'}">FAQs</a></li>
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='hosting'}">Hosting</a></li>
      </ul>
    </li>

    <li>
      <!--
      <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="current"}">
        {translate key="navigation.current"}
      </a>
      -->
      <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Current</a>

    </li>
    <li class="dropdown">
      <!-- <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}">
        {translate key="navigation.archives"}
      </a>
      -->
      <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Archives</a>

    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='submissionprocess'}">Submission Process</a></li>
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='guides'}">User Guides</a></li>
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='manuscriptguidance'}">Manuscript Guidance</a></li>
        <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='policies'}">Author and Reviewer Policies</a></li>
        <li><a href="http://eepurl.com/dHwECf">Peer Reviewer applications</a></li>

      </ul>
    </li>
    <li><a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="contact"}">Contact</a></li>
  </ul>