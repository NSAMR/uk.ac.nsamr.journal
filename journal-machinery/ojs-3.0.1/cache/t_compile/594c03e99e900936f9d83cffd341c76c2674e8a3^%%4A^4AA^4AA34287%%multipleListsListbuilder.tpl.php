<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:53
         compiled from controllers/listbuilder/multipleListsListbuilder.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/listbuilder/multipleListsListbuilder.tpl', 11, false),array('modifier', 'uniqid', 'controllers/listbuilder/multipleListsListbuilder.tpl', 12, false),array('modifier', 'escape', 'controllers/listbuilder/multipleListsListbuilder.tpl', 21, false),array('modifier', 'translate', 'controllers/listbuilder/multipleListsListbuilder.tpl', 50, false),)), $this); ?>

<?php $this->assign('staticId', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['grid']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['grid']->getId()))); ?>
<?php $this->assign('gridId', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('concat', true, $_tmp, '-') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '-')))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php $this->assign('gridActOnId', $this->_tpl_vars['gridId']); ?>
<?php if (count ( $this->_tpl_vars['lists'] ) == 2): ?>
	<?php $this->assign('widthClass', 'pkp_helpers_half'); ?>
<?php elseif (count ( $this->_tpl_vars['lists'] ) == 3): ?>
	<?php $this->assign('widthClass', 'pkp_helpers_third'); ?>
<?php endif; ?>
<script>
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
').pkpHandler(
			'$.pkp.controllers.listbuilder.MultipleListsListbuilderHandler',
			{
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/listbuilder/listbuilderOptions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				listsId: [
				<?php $_from = $this->_tpl_vars['lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
					'<?php echo $this->_tpl_vars['list']->getId(); ?>
',
				<?php endforeach; endif; unset($_from); ?> ]
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
		<?php $_from = $this->_tpl_vars['lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
			<?php $this->assign('listId', $this->_tpl_vars['list']->getId()); ?>
			<div class="list_wrapper <?php echo $this->_tpl_vars['widthClass']; ?>
 list_<?php echo ((is_array($_tmp=$this->_tpl_vars['listId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
				<?php if ($this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_ABOVE)): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridActionsAbove.tpl", 'smarty_include_vars' => array('actions' => $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_ABOVE),'gridId' => $this->_tpl_vars['gridId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['list']->getTitle()): ?>
					<div class="list_header">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['list']->getTitle())) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)); ?>

					</div>
				<?php endif; ?>
				<?php $this->assign('gridTableId', ((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-table-", $this->_tpl_vars['listId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-table-", $this->_tpl_vars['listId']))); ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/listbuilder/listbuilderTable.tpl", 'smarty_include_vars' => array('gridTableId' => $this->_tpl_vars['gridTableId'],'rows' => $this->_tpl_vars['listsRows'][$this->_tpl_vars['listId']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div>