<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from core:controllers/tab/settings/appearance/form/lists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'core:controllers/tab/settings/appearance/form/lists.tpl', 11, false),array('block', 'fbvFormSection', 'core:controllers/tab/settings/appearance/form/lists.tpl', 12, false),array('function', 'fbvElement', 'core:controllers/tab/settings/appearance/form/lists.tpl', 13, false),)), $this); ?>
<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'advancedAppearanceSettings','title' => "manager.setup.lists")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.listsDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'itemsPerPage','value' => $this->_tpl_vars['itemsPerPage'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'label' => "common.itemsPerPage"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'numPageLinks','value' => $this->_tpl_vars['numPageLinks'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'label' => "manager.setup.numPageLinks"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>