<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:54:13
         compiled from form/radioButton.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/radioButton.tpl', 13, false),array('function', 'translate', 'form/radioButton.tpl', 16, false),)), $this); ?>

<li<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
	<label>
	<input type="radio" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php echo $this->_tpl_vars['FBV_radioParams']; ?>
 class="field radio"<?php if ($this->_tpl_vars['FBV_checked']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>/>
	<?php if ($this->_tpl_vars['FBV_label']): ?>
		<?php if ($this->_tpl_vars['FBV_translate']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		<?php endif; ?>
	<?php elseif ($this->_tpl_vars['FBV_content']): ?>
		<?php echo $this->_tpl_vars['FBV_content']; ?>

	<?php endif; ?>
	</label>
</li>