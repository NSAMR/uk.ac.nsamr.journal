<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:55:53
         compiled from management/settings/access.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'management/settings/access.tpl', 22, false),array('function', 'translate', 'management/settings/access.tpl', 30, false),)), $this); ?>

<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.access"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#accessTabs').pkpHandler(
			'$.pkp.controllers.tab.settings.managementSettings.UsersAndRolesTabHandler',
			{
				userGridContentUrl:'<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AccessSettingsTabHandler",'tab' => 'users','op' => 'showTab'), $this);?>
',
			}

		);
	});
</script>
<div id="accessTabs">
	<ul>
		<li><a name="users" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AccessSettingsTabHandler",'op' => 'showTab','tab' => 'users'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.users"), $this);?>
</a></li>
		<li><a name="roles" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AccessSettingsTabHandler",'op' => 'showTab','tab' => 'roles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.roles"), $this);?>
</a></li>
		<li><a name="siteAccessOptions" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AccessSettingsTabHandler",'op' => 'showTab','tab' => 'siteAccessOptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.siteAccessOptions.siteAccessOptions"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>