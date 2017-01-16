<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:06
         compiled from controllers/grid/gridHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'controllers/grid/gridHeader.tpl', 14, false),)), $this); ?>
<div class="header">

	<?php if ($this->_tpl_vars['grid']->getTitle()): ?>
		<h4>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getTitle())) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)); ?>

		</h4>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_ABOVE)): ?>
		<?php if ($this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_ABOVE)): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridActionsAbove.tpl", 'smarty_include_vars' => array('actions' => $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_ABOVE),'gridId' => $this->_tpl_vars['staticId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	<?php endif; ?>
</div>

<?php echo $this->_tpl_vars['gridFilterForm']; ?>
