<?php /* Smarty version 2.6.25-dev, created on 2017-05-05 09:40:32
         compiled from frontend/components/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/components/footer.tpl', 22, false),array('function', 'translate', 'frontend/components/footer.tpl', 24, false),array('function', 'load_script', 'frontend/components/footer.tpl', 95, false),array('modifier', 'assign', 'frontend/components/footer.tpl', 22, false),array('modifier', 'escape', 'frontend/components/footer.tpl', 24, false),)), $this); ?>

</main>


  </div><!-- pkp_structure_main -->

    <?php if (empty ( $this->_tpl_vars['isFullWidth'] )): ?>
    <?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Sidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sidebarCode'));?>

    <?php if ($this->_tpl_vars['sidebarCode']): ?>
      <div class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
        <?php echo $this->_tpl_vars['sidebarCode']; ?>

      </div><!-- pkp_sidebar.left -->
    <?php endif; ?>
  <?php endif; ?>



<!--footer start-->
<footer class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-3 margin-btm-30">
        <h3>Quick links</h3>
        <ul class="list-unstyled f-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutjnsamr.php">About</a></li>
          <li><a href="placeholder.php">Current issue</a></li>
          <li><a href="placeholder.php">Archive</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-lg-3 margin-btm-30">
        <h3>Policies</h3>
        <ul class="list-unstyled f-list">
          <li><a href="pol-head.php">Policies and guidelines</a></li>
          <li><a href="termsandconditions.php">Terms and Conditions</a></li>
          <li><a href="privacypolicy.php">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-lg-3 margin-btm-30">
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
      <div class="col-xs-12 col-lg-3 margin-btm-30">
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


<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend','scripts' => $this->_tpl_vars['scripts']), $this);?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</body>
</html>