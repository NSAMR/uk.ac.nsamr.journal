<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 22:58:03
         compiled from management/settings/website.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'management/settings/website.tpl', 24, false),array('function', 'translate', 'management/settings/website.tpl', 24, false),array('function', 'call_hook', 'management/settings/website.tpl', 30, false),)), $this); ?>

<?php echo ''; ?><?php $this->assign('pageTitle', "manager.website.title"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#websiteTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="websiteTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'appearance'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.website.appearance"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'information'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.website.information"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.website.archiving"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'languages'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
		<li><a name="plugins" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'plugins'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plugins"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'showTab','tab' => 'announcements'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.announcements"), $this);?>
</a>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Management::Settings::website"), $this);?>

	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>