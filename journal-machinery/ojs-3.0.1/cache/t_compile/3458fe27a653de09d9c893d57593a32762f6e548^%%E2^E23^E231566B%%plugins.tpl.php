<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:58
         compiled from controllers/tab/settings/plugins/plugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/plugins/plugins.tpl', 12, false),array('function', 'translate', 'controllers/tab/settings/plugins/plugins.tpl', 23, false),array('function', 'url', 'controllers/tab/settings/plugins/plugins.tpl', 27, false),array('function', 'load_url_in_div', 'controllers/tab/settings/plugins/plugins.tpl', 28, false),array('modifier', 'assign', 'controllers/tab/settings/plugins/plugins.tpl', 27, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'website','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#pluginsTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>

<div id="pluginsTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="#installedPluginsDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.plugins.installed"), $this);?>
</a></li>
		<li><a href="#pluginGalleryDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.plugins.pluginGallery"), $this);?>
</a></li>
	</ul>
	<div id="installedPluginsDiv">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.plugins.SettingsPluginGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pluginGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pluginGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'pluginGridContainer','url' => $this->_tpl_vars['pluginGridUrl']), $this);?>

	</div>
	<div id="pluginGalleryDiv">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.plugins.PluginGalleryGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pluginGalleryGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pluginGalleryGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'pluginGalleryGridContainer','url' => $this->_tpl_vars['pluginGalleryGridUrl']), $this);?>

	</div>
</div>