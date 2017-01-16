<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:31
         compiled from controllers/grid/settings/user/form/userRoleForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userRoleForm.tpl', 16, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userRoleForm.tpl', 17, false),array('function', 'translate', 'controllers/grid/settings/user/form/userRoleForm.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/grid/settings/user/form/userRoleForm.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userRoleForm.tpl', 29, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userRoleForm.tpl', 23, false),array('modifier', 'assign', 'controllers/grid/settings/user/form/userRoleForm.tpl', 26, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userRoleForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>
<form class="pkp_form" id="userRoleForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'updateUserRoles'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'userRoleFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.step2",'userFullName' => $this->_tpl_vars['userFullName']), $this);?>
</h3>

		<input type="hidden" id="userId" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

		<div id="userRolesContainer" class="full left">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.users.UserUserGroupListbuilderHandler",'op' => 'fetch','userId' => $this->_tpl_vars['userId'],'title' => "grid.user.addRoles",'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userRolesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userRolesUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'userRolesContainer','url' => $this->_tpl_vars['userRolesUrl']), $this);?>

		</div>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>