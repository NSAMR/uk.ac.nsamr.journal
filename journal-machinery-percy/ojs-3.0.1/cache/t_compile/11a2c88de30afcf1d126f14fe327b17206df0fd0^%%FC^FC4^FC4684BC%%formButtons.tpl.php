<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from form/formButtons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'form/formButtons.tpl', 19, false),array('modifier', 'concat', 'form/formButtons.tpl', 22, false),array('modifier', 'uniqid', 'form/formButtons.tpl', 22, false),array('function', 'fbvElement', 'form/formButtons.tpl', 31, false),array('function', 'translate', 'form/formButtons.tpl', 49, false),)), $this); ?>

<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'formButtons form_buttons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

		<?php $this->assign('submitButtonId', ((is_array($_tmp=((is_array($_tmp='submitFormButton')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>

		<?php if ($this->_tpl_vars['FBV_confirmSubmit']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:linkAction/buttonConfirmationLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => ((is_array($_tmp="#")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['submitButtonId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['submitButtonId'])),'dialogText' => ($this->_tpl_vars['FBV_confirmSubmit']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','class' => 'submitFormButton','id' => $this->_tpl_vars['submitButtonId'],'label' => $this->_tpl_vars['FBV_submitText'],'translate' => $this->_tpl_vars['FBV_translate'],'disabled' => $this->_tpl_vars['FBV_submitDisabled']), $this);?>


		<span class="pkp_spinner"></span>

		<?php if (! $this->_tpl_vars['FBV_hideCancel']): ?>
		<?php $this->assign('cancelButtonId', ((is_array($_tmp=((is_array($_tmp='cancelFormButton')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
		<?php if ($this->_tpl_vars['FBV_cancelAction']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonGenericLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => ((is_array($_tmp="#")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['cancelButtonId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['cancelButtonId'])),'action' => $this->_tpl_vars['FBV_cancelAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['FBV_cancelUrl']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonRedirectLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => ((is_array($_tmp="#")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['cancelButtonId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['cancelButtonId'])),'cancelUrl' => $this->_tpl_vars['FBV_cancelUrl'],'cancelUrlTarget' => $this->_tpl_vars['FBV_cancelUrlTarget'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<a href="#" id="<?php echo $this->_tpl_vars['cancelButtonId']; ?>
" class="cancelButton"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_cancelText']), $this);?>
</a>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>