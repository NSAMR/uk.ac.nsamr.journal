<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:52
         compiled from form/subLabel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/subLabel.tpl', 13, false),array('modifier', 'escape', 'form/subLabel.tpl', 20, false),array('function', 'translate', 'form/subLabel.tpl', 21, false),)), $this); ?>

<?php if ($this->_tpl_vars['FBV_uniqId']): ?>
	<?php if ($this->_tpl_vars['FBV_multilingual']): ?>
		<?php $this->assign('forElement', ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-", $this->_tpl_vars['formLocale'], "-", $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-", $this->_tpl_vars['formLocale'], "-", $this->_tpl_vars['FBV_uniqId']))); ?>
	<?php else: ?>
		<?php $this->assign('forElement', ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-", $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-", $this->_tpl_vars['FBV_uniqId']))); ?>
	<?php endif; ?>
<?php else: ?>
	<?php $this->assign('forElement', $this->_tpl_vars['FBV_id']); ?>
<?php endif; ?>
<label class="sub_label<?php if ($this->_tpl_vars['FBV_error']): ?> error<?php endif; ?>" <?php if (! $this->_tpl_vars['FBV_suppressId']): ?> for="<?php echo ((is_array($_tmp=$this->_tpl_vars['forElement'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['FBV_subLabelTranslate']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_required']): ?><span class="req">*</span><?php endif; ?>
</label>