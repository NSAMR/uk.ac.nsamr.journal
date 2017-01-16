<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:06
         compiled from controllers/grid/feature/gridOrderFinishControls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/feature/gridOrderFinishControls.tpl', 11, false),array('function', 'translate', 'controllers/grid/feature/gridOrderFinishControls.tpl', 12, false),)), $this); ?>
<div class="grid_controls order_finish_controls">
	<a href="#" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp)); ?>
-saveButton" class="saveButton">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.done"), $this);?>

	</a>
	<a href="#" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('concat', true, $_tmp) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp)); ?>
-cancel" class="cancelFormButton">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.action.cancelOrdering"), $this);?>

	</a>
</div>