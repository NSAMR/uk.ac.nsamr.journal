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
      <div class="col-md-3 margin-btm-30">
        <h3>Quick links</h3>
        <ul class="list-unstyled f-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutjnsamr.php">About</a></li>
          <li><a href="placeholder.php">Current issue</a></li>
          <li><a href="placeholder.php">Archive</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 margin-btm-30">
        <h3>Policies</h3>
        <ul class="list-unstyled f-list">
          <li><a href="pol-head.php">Policies and guidelines</a></li>
          <li><a href="termsandconditions.php">Terms and Conditions</a></li>
          <li><a href="privacypolicy.php">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 margin-btm-30">
        <h3>Recent Articles</h3>
        <div class="side-event clearfix">
          <div class="s-event-date">
            <span>Issue 1</span>
            2017
          </div>
          <div class="s-event-content">
            <h5><a href="#">
              Submit now to see your work here
            </a></h5>
            <p><i class="fa fa-user"></i> <strong>A. N. Other, S-O Else, author, author, author</strong></p>
            <p><i class="fa fa-file-text"></i> <strong>Neurology section</strong></p>
            <p>
              [ABSTRACT] Donec commodo felis nec eros mollis ...
            </p>
            <ul class="list-inline tag-list">
              <li><a href="#">Open Acess</a></li>
              <li><a href="#">Key words</a></li>
              <li><a href="#">Publish</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 margin-btm-30">
        <h3>Keep in touch</h3>
        <ul class="list-unstyled f-post">
          <li><p class="email"><i class="icon-with-space fa fa-envelope"></i>journal@nsamr.ac.uk</p></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <span><i class="fa fa-copyright icon-with-space"></i> Copyright 2016-2017 Student Association of Medical Research. Licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY Attribution 4.0</a> All Rights Reserved.</span>
    </div>
  </div>
</footer>
<!--footer end-->


{load_script context="frontend" scripts=$scripts}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
