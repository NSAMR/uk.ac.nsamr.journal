<?php /* Smarty version 2.6.25-dev, created on 2016-12-21 21:56:18
         compiled from controllers/grid/settings/user/form/userDetailsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 16, false),array('function', 'translate', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 17, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 28, false),array('function', 'load_url_in_div', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 52, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 56, false),array('modifier', 'json_encode', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 16, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 37, false),array('modifier', 'assign', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 51, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userDetailsForm').pkpHandler('$.pkp.controllers.grid.settings.user.form.UserDetailsFormHandler',
			{
				fetchUsernameSuggestionUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "api.user.UserApiHandler",'op' => 'suggestUsername','firstName' => 'FIRST_NAME_DUMMY','lastName' => 'LAST_NAME_DUMMY','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				usernameSuggestionTextAlert: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.mustProvideName"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<?php if (! $this->_tpl_vars['userId']): ?>
	<?php $this->assign('passwordRequired', 'true'); ?>
<?php endif; ?>
<form class="pkp_form" id="userDetailsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'updateUser'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<div id="userDetailsFormContainer">
		<div id="userDetails" class="full left">
			<?php if ($this->_tpl_vars['userId']): ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.userDetails"), $this);?>
</h3>
			<?php else: ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.step1"), $this);?>
</h3>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userId']): ?>
				<input type="hidden" id="userId" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'userDetailsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>

		<?php if ($this->_tpl_vars['userId']): ?><?php $this->assign('disableSendNotifySection', true); ?><?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/userDetails.tpl", 'smarty_include_vars' => array('disableAuthSourceSection' => "!".($this->_tpl_vars['authSourceOptions']),'disableSendNotifySection' => $this->_tpl_vars['disableSendNotifySection'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['userId']): ?>
			<div id="userRoles" class="full left">
				<div id="userRolesContainer" class="full left">
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.users.UserUserGroupListbuilderHandler",'op' => 'fetch','userId' => $this->_tpl_vars['userId'],'title' => "grid.user.userRoles",'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userRolesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userRolesUrl'));?>

					<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'userRolesContainer','url' => $this->_tpl_vars['userRolesUrl']), $this);?>

				</div>
			</div>
		<?php endif; ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	</div>
</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>