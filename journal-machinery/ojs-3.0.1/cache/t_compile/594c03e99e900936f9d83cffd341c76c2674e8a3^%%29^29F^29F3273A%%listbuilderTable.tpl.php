<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:53
         compiled from controllers/listbuilder/listbuilderTable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/listbuilder/listbuilderTable.tpl', 11, false),array('modifier', 'count', 'controllers/listbuilder/listbuilderTable.tpl', 12, false),array('function', 'translate', 'controllers/listbuilder/listbuilderTable.tpl', 38, false),)), $this); ?>

<table id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridTableId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
	<?php if (count($this->_tpl_vars['columns']) > 1): ?>		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/columnGroup.tpl", 'smarty_include_vars' => array('columns' => $this->_tpl_vars['columns'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<thead>
			<tr>
				<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column']):
?>
					<?php if ($this->_tpl_vars['column']->hasFlag('alignment')): ?>
						<?php $this->assign('alignment', $this->_tpl_vars['column']->getFlag('alignment')); ?>
					<?php else: ?>
						<?php $this->assign('alignment', @COLUMN_ALIGNMENT_LEFT); ?>
					<?php endif; ?>
					<th scope="col" style="text-align: <?php echo $this->_tpl_vars['alignment']; ?>
;">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['column']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

					</th>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
		</thead>
	<?php endif; ?>
	<tbody>
		<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lb_row']):
?>
			<?php echo $this->_tpl_vars['lb_row']; ?>

		<?php endforeach; endif; unset($_from); ?>
				<tr class="empty"<?php if ($this->_tpl_vars['rows']): ?> style="display: none;"<?php endif; ?>>
			<td colspan="<?php echo count($this->_tpl_vars['columns']); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.noItems"), $this);?>
</td>
		</tr>
		<div class="newRow"></div>
	</tbody>
</table>