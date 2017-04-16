<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:35
         compiled from controllers/grid/plugins/pluginGalleryGridFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 18, false),array('function', 'csrf', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 19, false),array('function', 'fbvElement', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 22, false),array('function', 'fbvFormButtons', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 26, false),array('block', 'fbvFormArea', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 20, false),array('block', 'fbvFormSection', 'controllers/grid/plugins/pluginGalleryGridFilter.tpl', 21, false),)), $this); ?>
<script>
	// Attach the form handler to the form.
	$('#pluginGallerySearchForm').pkpHandler('$.pkp.controllers.form.ClientFormHandler',
		{
			trackFormChanges: false
		}
	);
</script>
<form class="pkp_form filter" id="pluginGallerySearchForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'fetchGrid'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userSearchFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'category','from' => $this->_tpl_vars['filterData']['categories'],'selected' => $this->_tpl_vars['filterSelectionData']['category'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'pluginText','value' => $this->_tpl_vars['filterSelectionData']['pluginText'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "common.search"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>