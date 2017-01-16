<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:37
         compiled from controllers/listbuilder/listbuilderNonEditGridCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/listbuilder/listbuilderNonEditGridCell.tpl', 11, false),array('modifier', 'escape', 'controllers/listbuilder/listbuilderNonEditGridCell.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['id']): ?>
	<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<?php else: ?>
	<?php $this->assign('cellId', ""); ?>
<?php endif; ?>
<span <?php if ($this->_tpl_vars['cellId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['cellId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endif; ?>class="pkp_linkActions gridCellContainer">
	<div class="gridCellDisplay">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridCellContents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<div class="gridCellEdit">
			</div>
</span>
