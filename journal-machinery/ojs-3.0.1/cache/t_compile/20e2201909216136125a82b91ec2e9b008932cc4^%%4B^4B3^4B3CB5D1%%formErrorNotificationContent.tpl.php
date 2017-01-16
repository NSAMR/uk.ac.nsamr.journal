<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 16:02:42
         compiled from controllers/notification/formErrorNotificationContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/notification/formErrorNotificationContent.tpl', 11, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
	<a href="#<?php echo ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_tpl_vars['message']; ?>
</a><br />
<?php endforeach; endif; unset($_from); ?>