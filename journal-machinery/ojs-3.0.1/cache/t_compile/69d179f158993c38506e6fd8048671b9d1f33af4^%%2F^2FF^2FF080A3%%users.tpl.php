<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:58:59
         compiled from core:controllers/tab/settings/users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'core:controllers/tab/settings/users.tpl', 13, false),array('function', 'url', 'core:controllers/tab/settings/users.tpl', 15, false),array('function', 'load_url_in_div', 'core:controllers/tab/settings/users.tpl', 17, false),array('modifier', 'assign', 'core:controllers/tab/settings/users.tpl', 15, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "users-and-roles.md",'section' => 'users','class' => 'pkp_help_tab'), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'fetchGrid','oldUserId' => $this->_tpl_vars['oldUserId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'usersUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'usersUrl'));?>

<?php $this->assign('gridContainerId', 'userGridContainer'); ?>
<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['gridContainerId'],'url' => $this->_tpl_vars['usersUrl']), $this);?>
