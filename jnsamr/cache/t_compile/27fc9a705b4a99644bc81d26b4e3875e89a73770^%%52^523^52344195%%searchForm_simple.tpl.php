<?php /* Smarty version 2.6.25-dev, created on 2016-12-11 12:58:25
         compiled from frontend/components/searchForm_simple.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/searchForm_simple.tpl', 13, false),array('function', 'translate', 'frontend/components/searchForm_simple.tpl', 15, false),array('modifier', 'escape', 'frontend/components/searchForm_simple.tpl', 15, false),)), $this); ?>
<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
">
  <div class="form-group">
    <input class="form-control" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchQuery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.searchQuery"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
" placeholder="">
  </div>
  <button type="submit" class="btn btn-default"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
</button>
</form>
<?php endif; ?>