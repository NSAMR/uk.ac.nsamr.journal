<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:34
         compiled from controllers/listbuilder/listbuilderOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/listbuilder/listbuilderOptions.tpl', 12, false),array('modifier', 'escape', 'controllers/listbuilder/listbuilderOptions.tpl', 24, false),array('function', 'url', 'controllers/listbuilder/listbuilderOptions.tpl', 13, false),)), $this); ?>


gridId: <?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getId())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
fetchRowUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchRow','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
fetchOptionsUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchOptions','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
availableOptions: <?php echo ((is_array($_tmp=$this->_tpl_vars['availableOptions'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
<?php if ($this->_tpl_vars['grid']->getSaveType() == @LISTBUILDER_SAVE_TYPE_INTERNAL): ?>
	saveUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'save','params' => $this->_tpl_vars['gridRequestArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
	saveFieldName: null,
<?php else: ?>	saveUrl: null,
	saveFieldName: <?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getSaveFieldName())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
<?php endif; ?>
sourceType: <?php echo ((is_array($_tmp=$this->_tpl_vars['grid']->getSourceType())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
bodySelector: '#<?php echo ((is_array($_tmp=$this->_tpl_vars['gridActOnId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
features: <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'controllers/grid/feature/featuresOptions.tpl', 'smarty_include_vars' => array('features' => $this->_tpl_vars['features'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>,