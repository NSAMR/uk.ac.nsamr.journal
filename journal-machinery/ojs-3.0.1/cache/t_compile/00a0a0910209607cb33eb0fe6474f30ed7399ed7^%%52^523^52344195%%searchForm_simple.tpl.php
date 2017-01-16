<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 16:04:34
         compiled from frontend/components/searchForm_simple.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/searchForm_simple.tpl', 13, false),array('function', 'csrf', 'frontend/components/searchForm_simple.tpl', 14, false),array('function', 'translate', 'frontend/components/searchForm_simple.tpl', 15, false),array('modifier', 'escape', 'frontend/components/searchForm_simple.tpl', 15, false),)), $this); ?>
<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
	<form class="pkp_search" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
" method="post" role="search">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<input name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchQuery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.searchQuery"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
		<button type="submit">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>

		</button>
		<div class="search_controls" aria-hidden="true">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
" class="headerSearchPrompt search_prompt" aria-hidden="true">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>

			</a>
			<a href="#" class="search_cancel headerSearchCancel" aria-hidden="true"></a>
			<span class="search_loading" aria-hidden="true"></span>
		</div>
</form>
<?php endif; ?>