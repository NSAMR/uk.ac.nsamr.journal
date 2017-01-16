<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:03
         compiled from controllers/tab/settings/submissionStage/form/submissionStageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 28, false),array('function', 'load_url_in_div', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 33, false),array('function', 'translate', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 43, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 51, false),array('block', 'fbvFormArea', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 26, false),array('block', 'fbvFormSection', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 27, false),array('modifier', 'assign', 'controllers/tab/settings/submissionStage/form/submissionStageForm.tpl', 32, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => "workflow-submission",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submissionStageForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submissionStageForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'saveFormData','tab' => 'submissionStage'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submissionStageFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'authorGuidelinesArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.authorGuidelines",'description' => "manager.setup.authorGuidelines.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'authorGuidelines','id' => 'authorGuidelines','value' => $this->_tpl_vars['authorGuidelines'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.submissionChecklist.SubmissionChecklistGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionChecklistGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionChecklistGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionChecklistGridDiv','url' => $this->_tpl_vars['submissionChecklistGridUrl']), $this);?>


	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'notificationSettings')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.notifications",'for' => 'copySubmissionAckPrimaryContact','description' => "manager.setup.notifications.description",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'copySubmissionAckPrimaryContact','disabled' => $this->_tpl_vars['submissionAckDisabled'],'checked' => $this->_tpl_vars['copySubmissionAckPrimaryContact'],'label' => "manager.setup.notifications.copyPrimaryContact"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','disabled' => $this->_tpl_vars['submissionAckDisabled'],'id' => 'copySubmissionAckAddress','value' => $this->_tpl_vars['copySubmissionAckAddress'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'label' => "manager.setup.notifications.copySpecifiedAddress"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if ($this->_tpl_vars['submissionAckDisabled']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications.submissionAckDisabled"), $this);?>

		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.metadata.MetadataGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'metadataGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'metadataGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'metadataGridContainer','url' => $this->_tpl_vars['metadataGridUrl']), $this);?>


	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'submissionStageFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
</form>