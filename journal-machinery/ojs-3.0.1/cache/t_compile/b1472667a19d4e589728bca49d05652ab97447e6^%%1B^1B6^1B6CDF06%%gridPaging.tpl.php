<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:00
         compiled from controllers/grid/feature/gridPaging.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/feature/gridPaging.tpl', 13, false),array('function', 'page_info', 'controllers/grid/feature/gridPaging.tpl', 16, false),array('function', 'page_links', 'controllers/grid/feature/gridPaging.tpl', 17, false),)), $this); ?>

<div class="gridPaging">
	<div class="gridItemsPerPage">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.itemsPerPage"), $this);?>
:<select class="itemsPerPage"></select>
	</div>
	<div class="gridPages">
		<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['iterator'],'itemsPerPage' => $this->_tpl_vars['currentItemsPerPage']), $this);?>

		<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => $this->_tpl_vars['grid']->getId(),'iterator' => $this->_tpl_vars['iterator']), $this);?>

	</div>
</div>