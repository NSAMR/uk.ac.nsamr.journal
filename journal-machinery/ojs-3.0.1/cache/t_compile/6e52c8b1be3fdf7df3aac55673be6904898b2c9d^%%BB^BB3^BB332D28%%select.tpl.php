<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:58:59
         compiled from form/select.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/select.tpl', 14, false),array('function', 'html_options_translate', 'form/select.tpl', 16, false),array('function', 'html_options', 'form/select.tpl', 16, false),)), $this); ?>

<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
<select <?php echo $this->_tpl_vars['FBV_selectParams']; ?>
<?php if ($this->_tpl_vars['FBV_class']): ?> class="<?php echo $this->_tpl_vars['FBV_class']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['FBV_required']): ?> required="required"<?php endif; ?>>
	<?php if ($this->_tpl_vars['FBV_defaultValue'] !== null): ?>
		<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_defaultValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_defaultLabel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['FBV_translate']): ?><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['FBV_from'],'selected' => $this->_tpl_vars['FBV_selected']), $this);?>
<?php else: ?><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FBV_from'],'selected' => $this->_tpl_vars['FBV_selected']), $this);?>
<?php endif; ?>
</select>

<?php if ($this->_tpl_vars['FBV_label_content']): ?>
	<span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span>
<?php endif; ?>
</div>