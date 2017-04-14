<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from controllers/grid/tasks/task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/grid/tasks/task.tpl', 26, false),)), $this); ?>
<div class="task<?php if (! $this->_tpl_vars['notification']->getDateRead()): ?> unread<?php endif; ?>">
	<span class="message">
		<?php echo $this->_tpl_vars['message']; ?>

	</span>
	<div class="details">
		<?php if ($this->_tpl_vars['isMultiContext']): ?>
			<span class="acronym">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['context']->getLocalizedAcronym())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

			</span>
		<?php endif; ?>
		<span class="submission">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationObjectTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</span>
	</div>
</div>