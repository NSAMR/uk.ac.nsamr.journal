<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:43
         compiled from dashboard/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'dashboard/index.tpl', 20, false),array('function', 'translate', 'dashboard/index.tpl', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "navigation.submissions")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#dashboardTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="dashboardTabs" class="pkp_controllers_tab">
	<ul>
		<li><a name="myQueue" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'myQueue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "dashboard.myQueue"), $this);?>
</a></li>
		<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN , ROLE_ID_MANAGER ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
			<li><a name="active" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'active'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.long.active"), $this);?>
</a></li>
		<?php endif; ?>
		<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN , ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR , ROLE_ID_REVIEWER , ROLE_ID_ASSISTANT ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
			<li><a name="archives" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'archives'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>