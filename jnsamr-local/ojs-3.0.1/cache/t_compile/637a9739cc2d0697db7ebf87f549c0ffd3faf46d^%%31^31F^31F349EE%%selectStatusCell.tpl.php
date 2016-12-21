<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:56:00
         compiled from controllers/grid/common/cell/selectStatusCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/common/cell/selectStatusCell.tpl', 10, false),array('modifier', 'uniqid', 'controllers/grid/common/cell/selectStatusCell.tpl', 10, false),array('modifier', 'escape', 'controllers/grid/common/cell/selectStatusCell.tpl', 16, false),)), $this); ?>
<?php $this->assign('cellId', ((is_array($_tmp=((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id'])))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<span id="<?php echo $this->_tpl_vars['cellId']; ?>
">
	<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?>
		<?php $this->assign('defaultCellAction', $this->_tpl_vars['actions'][0]); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonGenericLinkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['defaultCellAction'],'buttonSelector' => ((is_array($_tmp="#select-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['cellId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['cellId'])))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<input type="checkbox" id="select-<?php echo $this->_tpl_vars['cellId']; ?>
" <?php if ($this->_tpl_vars['name']): ?>name="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['value']): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> style="height: 15px; width: 15px;" <?php if ($this->_tpl_vars['selected']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['disabled']): ?>disabled="disabled"<?php endif; ?>/>
</span>