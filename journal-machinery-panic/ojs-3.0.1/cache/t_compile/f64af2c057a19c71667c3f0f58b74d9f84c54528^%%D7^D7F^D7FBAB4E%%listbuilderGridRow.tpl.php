<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:35
         compiled from controllers/listbuilder/listbuilderGridRow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/listbuilder/listbuilderGridRow.tpl', 11, false),array('modifier', 'uniqid', 'controllers/listbuilder/listbuilderGridRow.tpl', 13, false),array('modifier', 'escape', 'controllers/listbuilder/listbuilderGridRow.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['row']->getId()): ?>
	<?php $this->assign('rowId', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['row']->getGridId(), "-row-", $this->_tpl_vars['row']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['row']->getGridId(), "-row-", $this->_tpl_vars['row']->getId()))); ?>
<?php else: ?>
	<?php $this->assign('rowId', ((is_array($_tmp=((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['row']->getGridId(), "-row-tempId-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['row']->getGridId(), "-row-tempId-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php endif; ?>
<tr <?php if ($this->_tpl_vars['rowId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endif; ?>class="<?php if ($this->_tpl_vars['rowId']): ?>element<?php echo ((is_array($_tmp=$this->_tpl_vars['row']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php endif; ?>gridRow">
	<?php ob_start(); ?>
		<div class="row_actions">
			<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('listbuilderRowActions', ob_get_contents());ob_end_clean(); ?>
	<?php $_from = $this->_tpl_vars['cells']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listbuilderCells'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listbuilderCells']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cell']):
        $this->_foreach['listbuilderCells']['iteration']++;
?>
		<?php if (($this->_foreach['listbuilderCells']['iteration'] <= 1)): ?>
			<td class="first_column">
				<?php if ($this->_tpl_vars['row']->getId()): ?>
					<input type="hidden" name="rowId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['row']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['row']->getId() || $this->_tpl_vars['row']->getIsModified()): ?>
					<input type="hidden" disabled="disabled" class="isModified" value="1" />
				<?php else: ?>
					<input type="hidden" disabled="disabled" class="isModified" value="0" />
				<?php endif; ?>
				<div class="row_container">
					<div class="gridCell row_file"><?php echo $this->_tpl_vars['cell']; ?>
</div>
				</div>
				<?php if (($this->_foreach['listbuilderCells']['iteration'] == $this->_foreach['listbuilderCells']['total'])): ?>
					<?php echo $this->_tpl_vars['listbuilderRowActions']; ?>

				<?php endif; ?>
			</td>
		<?php else: ?>
			<?php if ($this->_tpl_vars['column']->hasFlag('alignment')): ?>
				<?php $this->assign('alignment', $this->_tpl_vars['column']->getFlag('alignment')); ?>
			<?php else: ?>
				<?php $this->assign('alignment', @COLUMN_ALIGNMENT_CENTER); ?>
			<?php endif; ?>
			<td style="text-align: <?php echo $this->_tpl_vars['alignment']; ?>
" class="gridCell">
				<?php echo $this->_tpl_vars['cell']; ?>

				<?php if (($this->_foreach['listbuilderCells']['iteration'] == $this->_foreach['listbuilderCells']['total']) && $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT)): ?>
					<?php echo $this->_tpl_vars['listbuilderRowActions']; ?>

				<?php endif; ?>
			</td>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</tr>