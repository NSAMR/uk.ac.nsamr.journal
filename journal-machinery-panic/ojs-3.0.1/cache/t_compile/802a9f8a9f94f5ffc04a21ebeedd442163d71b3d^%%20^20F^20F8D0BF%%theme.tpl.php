<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:34
         compiled from core:controllers/tab/settings/appearance/form/theme.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'core:controllers/tab/settings/appearance/form/theme.tpl', 18, false),array('block', 'fbvFormSection', 'core:controllers/tab/settings/appearance/form/theme.tpl', 19, false),array('function', 'fbvElement', 'core:controllers/tab/settings/appearance/form/theme.tpl', 20, false),array('modifier', 'concat', 'core:controllers/tab/settings/appearance/form/theme.tpl', 29, false),array('modifier', 'escape', 'core:controllers/tab/settings/appearance/form/theme.tpl', 29, false),array('modifier', 'compare', 'core:controllers/tab/settings/appearance/form/theme.tpl', 35, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#selectTheme').pkpHandler('$.pkp.controllers.form.ThemeOptionsHandler');
	});
</script>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'selectTheme')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.layout.theme",'for' => 'themePluginPath','description' => "manager.setup.layout.themeDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'themePluginPath','from' => $this->_tpl_vars['enabledThemes'],'selected' => $this->_tpl_vars['themePluginPath'],'translate' => false), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (count ( $this->_tpl_vars['activeThemeOptions'] )): ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'activeThemeOptions')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['activeThemeOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['themeOptionName'] => $this->_tpl_vars['themeOption']):
?>

				<?php if ($this->_tpl_vars['themeOption']['type'] == 'text'): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => $this->_tpl_vars['themeOption']['label'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => ((is_array($_tmp=@THEME_OPTION_PREFIX)) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['themeOptionName']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['themeOptionName'])),'value' => ((is_array($_tmp=$this->_tpl_vars['themeOption']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'label' => $this->_tpl_vars['themeOption']['description']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php elseif ($this->_tpl_vars['themeOption']['type'] == 'radio'): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => $this->_tpl_vars['themeOption']['label'],'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_from = $this->_tpl_vars['themeOption']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['themeOptionItemName'] => $this->_tpl_vars['themeOptionItem']):
?>
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => ((is_array($_tmp=((is_array($_tmp=@THEME_OPTION_PREFIX)) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['themeOptionName']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['themeOptionName'])))) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['themeOptionItemName']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['themeOptionItemName'])),'name' => ((is_array($_tmp=@THEME_OPTION_PREFIX)) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['themeOptionName']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['themeOptionName'])),'value' => $this->_tpl_vars['themeOptionItemName'],'checked' => ((is_array($_tmp=$this->_tpl_vars['themeOption']['value'])) ? $this->_run_mod_handler('compare', true, $_tmp, $this->_tpl_vars['themeOptionItemName']) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, $this->_tpl_vars['themeOptionItemName'])),'label' => $this->_tpl_vars['themeOptionItem']), $this);?>

						<?php endforeach; endif; unset($_from); ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php elseif ($this->_tpl_vars['themeOption']['type'] == 'colour'): ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => $this->_tpl_vars['themeOption']['label'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'colour','id' => ((is_array($_tmp=@THEME_OPTION_PREFIX)) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['themeOptionName']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['themeOptionName'])),'value' => ((is_array($_tmp=$this->_tpl_vars['themeOption']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'default' => $this->_tpl_vars['themeOption']['default'],'label' => $this->_tpl_vars['themeOption']['description']), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>