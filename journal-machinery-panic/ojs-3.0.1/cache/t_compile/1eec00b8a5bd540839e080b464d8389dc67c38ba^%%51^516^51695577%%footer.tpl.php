<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:34
         compiled from core:controllers/tab/settings/appearance/form/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'core:controllers/tab/settings/appearance/form/footer.tpl', 11, false),array('block', 'fbvFormSection', 'core:controllers/tab/settings/appearance/form/footer.tpl', 12, false),array('function', 'fbvElement', 'core:controllers/tab/settings/appearance/form/footer.tpl', 13, false),)), $this); ?>
<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'pageFooterContainer','title' => "manager.setup.pageFooter")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.pageFooterDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'pageFooter','id' => 'pageFooter','value' => $this->_tpl_vars['pageFooter'],'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>