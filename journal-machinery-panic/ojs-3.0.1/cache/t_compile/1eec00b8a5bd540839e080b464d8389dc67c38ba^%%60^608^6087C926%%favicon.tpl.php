<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:34
         compiled from core:controllers/tab/settings/appearance/form/favicon.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'core:controllers/tab/settings/appearance/form/favicon.tpl', 12, false),)), $this); ?>
<?php $this->assign('uploadImageFieldId', $this->_tpl_vars['uploadImageLinkActions']['favicon']->getId()); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => ($this->_tpl_vars['uploadImageFieldId']),'label' => "manager.setup.favicon",'description' => "manager.setup.faviconDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<div id="favicon">
		<?php echo $this->_tpl_vars['imagesViews']['favicon']; ?>

	</div>
	<div id="<?php echo $this->_tpl_vars['uploadImageFieldId']; ?>
" class="pkp_linkActions">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['uploadImageLinkActions']['favicon'],'contextId' => 'appearanceForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>