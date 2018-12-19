{**
* templates/frontend/components/footer.tpl
*
* Copyright (c) 2014-2016 Simon Fraser University Library
* Copyright (c) 2003-2016 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Common site frontend footer.
*
* @uses $isFullWidth bool Should this page be displayed without sidebars? This
*       represents a page-level override, and doesn't indicate whether or not
*       sidebars have been configured for thesite.
*}

</main>


</div><!-- pkp_structure_main -->

{* Sidebars *}
{if empty($isFullWidth)}
{call_hook|assign:"sidebarCode" name="Templates::Common::Sidebar"}
{if $sidebarCode}
<div class="pkp_structure_sidebar left" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
{$sidebarCode}
</div><!-- pkp_sidebar.left -->
{/if}
{/if}



<!--footer start-->
<footer class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 margin-btm-30">
        <h3>Quick links</h3>
        <ul class="list-unstyled f-list">
          <li><a href="{$baseUrl}">Home</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about'}">About JSAMR</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='faqs'}">FAQs</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='hosting'}">Hosting</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Current issue</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Archives</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='contact'}">Contact</a></li>
        </ul>
      </div>

      <div class="col-xs-6 margin-btm-30">
        <h3>Policies</h3>
        <ul class="list-unstyled f-list">
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='submissionprocess'}">Submission Process</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='guides'}">User Guides</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='manuscriptguidance'}">Manuscript Guidance</a></li>
          <li><a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='policies'}">Author and Reviewer Policies</a></li>
        </ul>
      </div>
    </div> 
  </div>  
  <div class="footer-bottom">
    <div class="container">
      <span><i class="fa fa-copyright icon-with-space"></i> Copyright 2016-2018 Student Association of Medical Research.</span>
      <br>
      <span>Journal contents licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY Attribution 4.0</a>.</span>
      <br>
      <span>Source code licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU GPL version 3</a> and available on <a href="https://github.com/NSAMR/uk.ac.nsamr.journal">GitHub</a>.</span>
      <br>
      <span>All Rights Reserved.</span>
    </div>
    <hr>
    <div class="container">
      <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Terms and Conditions</a> . <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='placeholder'}">Privacy Policy</a>
    </span>
  </div>
</div>
</footer>
<!--footer end-->


{load_script context="frontend" scripts=$scripts}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
