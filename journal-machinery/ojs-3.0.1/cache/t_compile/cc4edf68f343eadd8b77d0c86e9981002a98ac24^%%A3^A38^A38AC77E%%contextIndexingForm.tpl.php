<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:58:44
         compiled from controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 29, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 37, false),array('block', 'fbvFormArea', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 27, false),array('block', 'fbvFormSection', 'controllers/tab/settings/contextIndexing/form/contextIndexingForm.tpl', 28, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'distribution','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#contextIndexingForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="contextIndexingForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'saveFormData','tab' => 'indexing'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'contextIndexingFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/settings/wizardMode.tpl", 'smarty_include_vars' => array('wizardMode' => $this->_tpl_vars['wizardMode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'searchEngineIndexing')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.description",'description' => "manager.setup.searchEngineIndexingDescription",'label' => "manager.setup.searchEngineIndexing")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','id' => 'searchDescription','name' => 'searchDescription','value' => $this->_tpl_vars['searchDescription'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.customTags",'description' => "manager.setup.customTagsDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','id' => 'customHeaders','name' => 'customHeaders','value' => $this->_tpl_vars['customHeaders']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'contextIndexingFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
</form>