<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:34
         compiled from form/textarea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/textarea.tpl', 11, false),array('modifier', 'escape', 'form/textarea.tpl', 11, false),array('modifier', 'json_encode', 'form/textarea.tpl', 30, false),array('modifier', 'strip_unsafe_html', 'form/textarea.tpl', 56, false),)), $this); ?>

<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['FBV_uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
<?php if ($this->_tpl_vars['FBV_multilingual'] && count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<script>
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
').pkpHandler(
			'$.pkp.controllers.form.MultilingualInputHandler'
			);
	});
	</script>
		<span id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
" class="localization_popover_container">
		<?php echo '<textarea id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '-'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php echo $this->_tpl_vars['uniqId']; ?><?php echo '" '; ?><?php echo $this->_tpl_vars['FBV_textAreaParams']; ?><?php echo 'rows="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_rows'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '"cols="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_cols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '"class="localizable '; ?><?php echo $this->_tpl_vars['FBV_class']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['FBV_height']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_validation']): ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_validation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['currentLocale']): ?><?php echo ' locale_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_rich'] && ! $this->_tpl_vars['FBV_disabled']): ?><?php echo ' richContent'; ?><?php if ($this->_tpl_vars['FBV_rich'] === 'extended'): ?><?php echo ' extendedRichContent'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?><?php echo ' disabled="disabled"'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_readonly']): ?><?php echo ' readonly="readonly"'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_variables']): ?><?php echo ' data-variables="'; ?><?php echo ((is_array($_tmp=json_encode($this->_tpl_vars['FBV_variables']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '"'; ?><?php endif; ?><?php echo 'name="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '['; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ']">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</textarea>'; ?>


		<?php echo $this->_tpl_vars['FBV_label_content']; ?>


		<div class="localization_popover">
			<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['thisFormLocale']): ?>
				<?php echo '<textarea id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '-'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php echo $this->_tpl_vars['uniqId']; ?><?php echo '" '; ?><?php echo $this->_tpl_vars['FBV_textAreaParams']; ?><?php echo 'placeholder="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '"class="flag flag_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ' '; ?><?php echo $this->_tpl_vars['FBV_class']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['FBV_height']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_rich'] && ! $this->_tpl_vars['FBV_disabled']): ?><?php echo ' richContent'; ?><?php if ($this->_tpl_vars['FBV_rich'] === 'extended'): ?><?php echo ' extendedRichContent'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['FBV_disabled']): ?><?php echo ' disabled="disabled"'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_readonly']): ?><?php echo ' readonly="readonly"'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['FBV_variables']): ?><?php echo ' data-variables="'; ?><?php echo ((is_array($_tmp=json_encode($this->_tpl_vars['FBV_variables']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '"'; ?><?php endif; ?><?php echo 'name="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '['; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ']">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['thisFormLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</textarea>'; ?>

				<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
" class="locale">(<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</label>
			<?php endif; ?><?php endforeach; endif; unset($_from); ?>
		</div>
	</span>
<?php else: ?>
		<?php if ($this->_tpl_vars['FBV_rich'] && $this->_tpl_vars['FBV_disabled']): ?>
		<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
<?php endif; ?>
	<?php else: ?>
		<textarea <?php echo $this->_tpl_vars['FBV_textAreaParams']; ?>

			class="<?php echo $this->_tpl_vars['FBV_class']; ?>
 <?php echo $this->_tpl_vars['FBV_height']; ?>
<?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_validation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_rich'] && ! $this->_tpl_vars['FBV_disabled']): ?> richContent<?php if ($this->_tpl_vars['FBV_rich'] === 'extended'): ?> extendedRichContent<?php endif; ?><?php endif; ?>"
			<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
			<?php if ($this->_tpl_vars['FBV_readonly']): ?> readonly="readonly"<?php endif; ?>
			<?php if ($this->_tpl_vars['FBV_variables']): ?> data-variables="<?php echo ((is_array($_tmp=json_encode($this->_tpl_vars['FBV_variables']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"<?php endif; ?>
			name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['FBV_multilingual']): ?>[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]<?php endif; ?>"
			rows="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_rows'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
			cols="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_cols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
			id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"><?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></textarea>
	<?php endif; ?>
		<span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span>
<?php endif; ?>
</div>