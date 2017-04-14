<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from common/helpLink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/helpLink.tpl', 17, false),array('function', 'translate', 'common/helpLink.tpl', 21, false),)), $this); ?>
<a href="#" class="requestHelpPanel pkp_help_link <?php echo ((is_array($_tmp=$this->_tpl_vars['helpClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" data-topic="<?php echo ((is_array($_tmp=$this->_tpl_vars['helpFile'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['helpSection']): ?>#<?php echo ((is_array($_tmp=$this->_tpl_vars['helpSection'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">
	<?php if ($this->_tpl_vars['helpText']): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	<?php else: ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['helpTextKey']), $this);?>

	<?php endif; ?>
</a>