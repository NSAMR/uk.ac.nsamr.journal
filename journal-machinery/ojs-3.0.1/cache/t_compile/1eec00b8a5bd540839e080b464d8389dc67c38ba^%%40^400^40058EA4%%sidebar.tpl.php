<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:52
         compiled from core:controllers/tab/settings/appearance/form/sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:controllers/tab/settings/appearance/form/sidebar.tpl', 11, false),array('function', 'load_url_in_div', 'core:controllers/tab/settings/appearance/form/sidebar.tpl', 12, false),array('modifier', 'assign', 'core:controllers/tab/settings/appearance/form/sidebar.tpl', 11, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.settings.BlockPluginsListbuilderHandler",'op' => 'fetch','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'blockPluginsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'blockPluginsUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'blockPluginsContainer','url' => $this->_tpl_vars['blockPluginsUrl']), $this);?>
