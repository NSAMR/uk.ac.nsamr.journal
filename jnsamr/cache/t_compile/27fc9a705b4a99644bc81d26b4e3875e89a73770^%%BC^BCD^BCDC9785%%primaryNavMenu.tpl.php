<?php /* Smarty version 2.6.25-dev, created on 2016-12-11 12:58:25
         compiled from frontend/components/primaryNavMenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/primaryNavMenu.tpl', 14, false),array('function', 'translate', 'frontend/components/primaryNavMenu.tpl', 15, false),)), $this); ?>
<ul id="main-navigation" class="nav navbar-nav">

  <?php if ($this->_tpl_vars['enableAnnouncements']): ?>
  <li>
    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement'), $this);?>
">
      <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>

    </a>
  </li>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['currentJournal']): ?>

  <?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
  <li>
    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'current'), $this);?>
">
      <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>

    </a>
  </li>
  <li>
    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this);?>
">
      <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>

    </a>
  </li>
  <?php endif; ?>
  <li class="dropdown">
    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about'), $this);?>
" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
 <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li>
        <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about'), $this);?>
">
          <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutContext"), $this);?>

        </a>
      </li>
      <li>
        <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'editorialTeam'), $this);?>
">
          <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>

        </a>
      </li>
      <li>
        <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'submissions'), $this);?>
">
          <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>

        </a>
      </li>
	  <?php if ($this->_tpl_vars['currentJournal']->getSetting('mailingAddress') || $this->_tpl_vars['currentJournal']->getSetting('contactName')): ?>
	  <li>
	    <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'contact'), $this);?>
">
		    <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>

	    </a>
	  </li>
      <?php endif; ?>
    </ul>

    <?php endif; ?>
  </ul>