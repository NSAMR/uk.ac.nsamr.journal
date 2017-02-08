<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 22:58:03
         compiled from controllers/notification/inPlaceNotificationContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/notification/inPlaceNotificationContent.tpl', 10, false),)), $this); ?>
<div id="pkp_notification_<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['notificationStyleClass']): ?> class="<?php echo $this->_tpl_vars['notificationStyleClass']; ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['notificationTitle']): ?>
		<span class="title">
			<?php echo $this->_tpl_vars['notificationTitle']; ?>

		</span>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['notificationContents']): ?>
		<span class="description">
			<?php echo $this->_tpl_vars['notificationContents']; ?>

		</span>
	<?php endif; ?>
</div>