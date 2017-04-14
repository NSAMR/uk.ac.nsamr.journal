<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from form/formArea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/formArea.tpl', 11, false),array('function', 'translate', 'form/formArea.tpl', 13, false),)), $this); ?>

<fieldset <?php if ($this->_tpl_vars['FBV_id']): ?> id="<?php echo $this->_tpl_vars['FBV_id']; ?>
"<?php endif; ?><?php if ($this->_tpl_vars['FBV_class']): ?> class="pkp_formArea <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['FBV_title']): ?>
		<legend><?php if ($this->_tpl_vars['FBV_translate']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_title']), $this);?>
<?php else: ?><?php echo $this->_tpl_vars['FBV_title']; ?>
<?php endif; ?></legend>
	<?php endif; ?>
	<?php echo $this->_tpl_vars['FBV_content']; ?>

</fieldset>