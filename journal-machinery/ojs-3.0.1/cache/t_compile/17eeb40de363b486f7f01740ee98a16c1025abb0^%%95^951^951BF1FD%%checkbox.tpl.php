<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:04
         compiled from form/checkbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/checkbox.tpl', 15, false),array('function', 'translate', 'form/checkbox.tpl', 17, false),)), $this); ?>

<li<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['FBV_label']): ?>
		<label>
	<?php endif; ?>
	<input type="checkbox" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php echo $this->_tpl_vars['FBV_checkboxParams']; ?>
 class="field checkbox<?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_validation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_required']): ?> required<?php endif; ?>"<?php if ($this->_tpl_vars['FBV_checked']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>/>
	<?php if ($this->_tpl_vars['FBV_translate']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?>

	<?php else: ?>
		<?php if ($this->_tpl_vars['FBV_keepLabelHtml']): ?>
			<?php echo $this->_tpl_vars['FBV_label']; ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['FBV_label']; ?>

		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['FBV_label']): ?>
		</label>
	<?php endif; ?>
</li>