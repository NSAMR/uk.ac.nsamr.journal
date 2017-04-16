<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from controllers/grid/gridRow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/gridRow.tpl', 11, false),array('modifier', 'escape', 'controllers/grid/gridRow.tpl', 13, false),array('modifier', 'cat', 'controllers/grid/gridRow.tpl', 22, false),array('function', 'translate', 'controllers/grid/gridRow.tpl', 53, false),)), $this); ?>
<?php if (! is_null ( $this->_tpl_vars['row']->getId() )): ?>
	<?php $this->assign('rowIdPrefix', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['row']->getGridId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['row']->getGridId()))); ?>
	<?php if ($this->_tpl_vars['categoryId']): ?>
		<?php $this->assign('rowIdPrefix', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rowIdPrefix'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-category-", $this->_tpl_vars['categoryId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-category-", $this->_tpl_vars['categoryId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
	<?php endif; ?>
	<?php $this->assign('rowId', ((is_array($_tmp=$this->_tpl_vars['rowIdPrefix'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-row-", $this->_tpl_vars['row']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-row-", $this->_tpl_vars['row']->getId()))); ?>
<?php else: ?>
	<?php $this->assign('rowId', ""); ?>
<?php endif; ?>

<?php $this->assign('row_class', 'gridRow'); ?>
<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?>
	<?php $this->assign('row_class', ((is_array($_tmp=$this->_tpl_vars['row_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' category') : smarty_modifier_cat($_tmp, ' category'))); ?>
	<?php if (! $this->_tpl_vars['row']->hasFlag('gridRowStyle')): ?>
		<?php $this->assign('row_class', ((is_array($_tmp=$this->_tpl_vars['row_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' default_category_style') : smarty_modifier_cat($_tmp, ' default_category_style'))); ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
	<?php $this->assign('row_class', ((is_array($_tmp=$this->_tpl_vars['row_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' has_extras') : smarty_modifier_cat($_tmp, ' has_extras'))); ?>
<?php endif; ?>

<tr <?php if ($this->_tpl_vars['rowId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endif; ?> class="<?php echo $this->_tpl_vars['row_class']; ?>
">
	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columnLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columnLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['column']):
        $this->_foreach['columnLoop']['iteration']++;
?>

				<?php if ($this->_tpl_vars['column']->hasFlag('indent')): ?>
			<?php continue; ?>
		<?php endif; ?>

		<?php $this->assign('col_class', ""); ?>
		<?php if ($this->_tpl_vars['column']->hasFlag('firstColumn')): ?>
			<?php $this->assign('col_class', ((is_array($_tmp=$this->_tpl_vars['col_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'first_column') : smarty_modifier_cat($_tmp, 'first_column'))); ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['column']->hasFlag('alignment')): ?>
			<?php $this->assign('col_class', ((is_array($_tmp=$this->_tpl_vars['col_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' pkp_helpers_text_') : smarty_modifier_cat($_tmp, ' pkp_helpers_text_'))); ?>
			<?php $this->assign('col_class', ((is_array($_tmp=$this->_tpl_vars['col_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['column']->getFlag('alignment')) : smarty_modifier_cat($_tmp, $this->_tpl_vars['column']->getFlag('alignment')))); ?>
		<?php endif; ?>

		<td<?php if ($this->_tpl_vars['col_class']): ?> class="<?php echo $this->_tpl_vars['col_class']; ?>
"<?php endif; ?>>
			<?php if ($this->_tpl_vars['row']->hasActions() && $this->_tpl_vars['column']->hasFlag('firstColumn')): ?>
				<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
					<a href="#" class="show_extras">
						<span class="pkp_screen_reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.settings"), $this);?>
</span>
					</a>
				<?php endif; ?>
				<?php echo $this->_tpl_vars['cells'][($this->_foreach['columnLoop']['iteration']-1)]; ?>

				<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' ) && $this->_tpl_vars['column']->hasFlag('showTotalItemsNumber')): ?>
					<span class="category_items_number">(<?php echo $this->_tpl_vars['grid']->getCategoryItemsCount($this->_tpl_vars['categoryRow']->getData(),$this->_tpl_vars['request']); ?>
)</span>
				<?php endif; ?>
				<div class="row_actions">
					<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT)): ?>
						<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</div>
			<?php else: ?>
				<?php echo $this->_tpl_vars['cells'][($this->_foreach['columnLoop']['iteration']-1)]; ?>

				<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' ) && $this->_tpl_vars['column']->hasFlag('showTotalItemsNumber')): ?>
					<span class="category_items_number">(<?php echo $this->_tpl_vars['grid']->getCategoryItemsCount($this->_tpl_vars['categoryRow']->getData(),$this->_tpl_vars['request']); ?>
)</span>
				<?php endif; ?>
			<?php endif; ?>
		</td>
	<?php endforeach; endif; unset($_from); ?>
</tr>
<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
	<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-control-row" class="row_controls<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?> category_controls<?php endif; ?>">
		<td colspan="<?php echo $this->_tpl_vars['grid']->getColumnsCount('indent'); ?>
">
			<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
				<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		</td>
	</tr>
<?php endif; ?>