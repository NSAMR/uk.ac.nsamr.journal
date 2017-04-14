<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:35
         compiled from controllers/listbuilder/listbuilderGridCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/listbuilder/listbuilderGridCell.tpl', 11, false),array('modifier', 'escape', 'controllers/listbuilder/listbuilderGridCell.tpl', 15, false),array('modifier', 'uniqid', 'controllers/listbuilder/listbuilderGridCell.tpl', 39, false),array('function', 'translate', 'controllers/listbuilder/listbuilderGridCell.tpl', 49, false),)), $this); ?>
<?php if ($this->_tpl_vars['id']): ?>
	<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<?php else: ?>
	<?php $this->assign('cellId', ""); ?>
<?php endif; ?>
<span <?php if ($this->_tpl_vars['cellId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['cellId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endif; ?>class="pkp_linkActions gridCellContainer">
	<?php if ($this->_tpl_vars['column']->getFlag('sourceType') === @LISTBUILDER_SOURCE_TYPE_NONE): ?>
		<div class="gridCell">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridCellContents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php else: ?>
		<div class="gridCellDisplay">
			<?php if ($this->_tpl_vars['column']->getFlag('sourceType') === @LISTBUILDER_SOURCE_TYPE_SELECT): ?>
								<input type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['labelKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php endif; ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/gridCellContents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>

		<div class="gridCellEdit">
			<?php if ($this->_tpl_vars['column']->getFlag('sourceType') === @LISTBUILDER_SOURCE_TYPE_TEXT): ?>
				<?php if ($this->_tpl_vars['column']->hasFlag('multilingual')): ?>
					<?php $this->assign('FBV_id', 'newRowId'); ?>
					<?php $this->assign('FBV_uniqId', ((is_array($_tmp="")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
					<?php $this->assign('FBV_name', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="newRowId[")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['column']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['column']->getId())))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('concat', true, $_tmp, "]") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "]"))); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/textInput.tpl", 'smarty_include_vars' => array('formLocale' => $this->_tpl_vars['primaryLocale'],'FBV_id' => $this->_tpl_vars['FBV_id'],'FBV_name' => $this->_tpl_vars['FBV_name'],'FBV_value' => $this->_tpl_vars['label'],'FBV_tabIndex' => $this->_tpl_vars['column']->getFlag('tabIndex'),'FBV_multilingual' => true,'formLocales' => $this->_tpl_vars['formLocales'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<?php else: ?>					<input type="text" name="newRowId[<?php echo ((is_array($_tmp=$this->_tpl_vars['column']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" class="textField" <?php if ($this->_tpl_vars['column']->getFlag('tabIndex')): ?>tabindex="<?php echo $this->_tpl_vars['column']->getFlag('tabIndex'); ?>
"<?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php endif; ?>
			<?php elseif ($this->_tpl_vars['column']->getFlag('sourceType') == @LISTBUILDER_SOURCE_TYPE_SELECT): ?>
				<select name="newRowId[<?php echo ((is_array($_tmp=$this->_tpl_vars['column']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" class="selectMenu">
										<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['labelKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.loading"), $this);?>
</option>
				</select>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</span>
