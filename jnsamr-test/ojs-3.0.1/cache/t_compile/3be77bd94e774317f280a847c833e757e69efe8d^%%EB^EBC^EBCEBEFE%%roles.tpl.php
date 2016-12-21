<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:56:00
         compiled from core:controllers/tab/settings/roles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'core:controllers/tab/settings/roles.tpl', 12, false),array('function', 'url', 'core:controllers/tab/settings/roles.tpl', 15, false),array('function', 'load_url_in_div', 'core:controllers/tab/settings/roles.tpl', 16, false),array('modifier', 'assign', 'core:controllers/tab/settings/roles.tpl', 15, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "users-and-roles.md",'section' => 'roles','class' => 'pkp_help_tab'), $this);?>


<div id="userGroupsContainer">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.roles.UserGroupGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rolesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rolesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'roleGridContainer','url' => $this->_tpl_vars['rolesUrl']), $this);?>

</div>