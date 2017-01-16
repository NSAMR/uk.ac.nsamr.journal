<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:34
         compiled from controllers/listbuilder/listbuilder.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/listbuilder/listbuilder.tpl', 11, false),array('modifier', 'uniqid', 'controllers/listbuilder/listbuilder.tpl', 12, false),array('modifier', 'escape', 'controllers/listbuilder/listbuilder.tpl', 18, false),)), $this); ?>

<?php $this->assign('staticId', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['grid']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['grid']->getId()))); ?>
<?php $this->assign('gridId', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('concat', true, $_tmp, '-') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '-')))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php $this->assign('gridTableId', ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-table") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-table"))); ?>
<?php $this->assign('gridActOnId', ((is_array($_tmp=$this->_tpl_vars['gridTableId'])) ? $this->_run_mod_handler('concat', true, $_tmp, ">tbody:first") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, ">tbody:first"))); ?>

<script>
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
').pkpHandler(
			'$.pkp.controllers.listbuilder.ListbuilderHandler',
			{
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/listbuilder/listbuilderOptions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			}
		);
	});
</script>


<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="pkp_controllers_grid pkp_controllers_listbuilder formWidget">

		<input disabled="disabled" type="hidden" class="deletions" />

	<div class="wrapper">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/listbuilder/listbuilderTable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php if ($this->_tpl_vars['hasOrderLink']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridOrderFinishControls.tpl", 'smarty_include_vars' => array('gridId' => $this->_tpl_vars['staticId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div>
</div>