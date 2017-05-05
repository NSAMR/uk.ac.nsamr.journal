<?php /* Smarty version 2.6.25-dev, created on 2017-05-05 09:40:32
         compiled from frontend/components/primaryNavMenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/primaryNavMenu.tpl', 15, false),array('function', 'translate', 'frontend/components/primaryNavMenu.tpl', 24, false),)), $this); ?>
  <ul class="nav navbar-nav navbar-right">`
    <li><a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
">Home</a></li>
    <li class="dropdown">
      <a href="" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about'), $this);?>
">About JSAMR</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'faqs'), $this);?>
">FAQs</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'hosting'), $this);?>
">Hosting</a></li>
      </ul>
    </li>

    <li>
      <!--
      <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'current'), $this);?>
">
        <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>

      </a>
      -->
      <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'placeholder'), $this);?>
">Current</a>

    </li>
    <li class="dropdown">
      <!-- <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this);?>
">
        <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>

      </a>
      -->
      <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'placeholder'), $this);?>
">Archives</a>

    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contribute <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'placeholder'), $this);?>
">Submit Your Work</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'guides'), $this);?>
">User Guides</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'placeholder'), $this);?>
">Manuscript Guidance</a></li>
        <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'placeholder'), $this);?>
">Author and Reviewer Policies</a></li>
      </ul>
    </li>
    <li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'contact'), $this);?>
">Contact</a></li>
  </ul>