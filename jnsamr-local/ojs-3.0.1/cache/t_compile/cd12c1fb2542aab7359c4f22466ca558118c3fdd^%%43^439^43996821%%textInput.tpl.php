<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:55:54
         compiled from form/textInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/textInput.tpl', 11, false),array('modifier', 'escape', 'form/textInput.tpl', 11, false),array('modifier', 'strstr', 'form/textInput.tpl', 65, false),array('modifier', 'dateformatPHP2JQueryDatepicker', 'form/textInput.tpl', 66, false),)), $this); ?>

<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['FBV_uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
<?php if ($this->_tpl_vars['FBV_multilingual'] && count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<script>
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
').pkpHandler(
			'$.pkp.controllers.form.MultilingualInputHandler'
			);
	});
	</script>
		<span id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-localization-popover-container<?php echo $this->_tpl_vars['uniqId']; ?>
" class="localization_popover_container">
		<input type="<?php if ($this->_tpl_vars['FBV_isPassword']): ?>password<?php else: ?>text<?php endif; ?>"
			<?php echo $this->_tpl_vars['FBV_textInputParams']; ?>

			class="localizable <?php if ($this->_tpl_vars['FBV_class']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo $this->_tpl_vars['FBV_validation']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['currentLocale']): ?> locale_<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"
			<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
			<?php if ($this->_tpl_vars['FBV_readonly']): ?> readonly="readonly"<?php endif; ?>
			value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
			name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]"
			id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"
		/>

		<?php echo $this->_tpl_vars['FBV_label_content']; ?>


		<div class="localization_popover">
			<?php $_from = $this->_tpl_vars['formLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisFormLocale'] => $this->_tpl_vars['thisFormLocaleName']):
?><?php if ($this->_tpl_vars['formLocale'] != $this->_tpl_vars['thisFormLocale']): ?>
				<input	type="<?php if ($this->_tpl_vars['FBV_isPassword']): ?>password<?php else: ?>text<?php endif; ?>"
					<?php echo $this->_tpl_vars['FBV_textInputParams']; ?>

					placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
					class="multilingual_extra flag flag_<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['FBV_sizeInfo']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_sizeInfo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"
					<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
					<?php if ($this->_tpl_vars['FBV_readonly']): ?> readonly="readonly"<?php endif; ?>
					value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['thisFormLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
					name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
[<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]"
					id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"
					<?php if ($this->_tpl_vars['FBV_tabIndex']): ?> tabindex="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_tabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
				/>
				<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
" class="locale">(<?php echo ((is_array($_tmp=$this->_tpl_vars['thisFormLocaleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</label>
			<?php endif; ?><?php endforeach; endif; unset($_from); ?>
		</div>
	</span>
<?php else: ?>
		<input	type="<?php if ($this->_tpl_vars['FBV_isPassword']): ?>password<?php else: ?>text<?php endif; ?>"
		<?php echo $this->_tpl_vars['FBV_textInputParams']; ?>

		class="field text<?php if ($this->_tpl_vars['FBV_class']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo $this->_tpl_vars['FBV_validation']; ?>
<?php endif; ?>"
		<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
		<?php if ($this->_tpl_vars['FBV_readonly']): ?> readonly="readonly"<?php endif; ?>
		name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['FBV_multilingual']): ?>[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]<?php endif; ?>"
		value="<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"
		id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"
		<?php if ($this->_tpl_vars['FBV_tabIndex']): ?> tabindex="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_tabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
	/>

	<?php if (((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'datepicker') : strstr($_tmp, 'datepicker'))): ?> 
		<input data-date-format="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateFormatShort'])) ? $this->_run_mod_handler('dateformatPHP2JQueryDatepicker', true, $_tmp) : PKPString::dateformatPHP2JQueryDatepicker($_tmp)); ?>
" type="hidden" 
		name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['FBV_multilingual']): ?>[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]<?php endif; ?>"
		value="<?php if ($this->_tpl_vars['FBV_multilingual']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"
		id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
-altField" />
	<?php endif; ?>

	<span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span>
<?php endif; ?>
</div>