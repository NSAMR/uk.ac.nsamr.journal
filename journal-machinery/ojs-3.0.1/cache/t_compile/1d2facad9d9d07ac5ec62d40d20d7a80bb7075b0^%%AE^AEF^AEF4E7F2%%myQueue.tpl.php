<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 16:04:29
         compiled from dashboard/myQueue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'dashboard/myQueue.tpl', 12, false),array('function', 'url', 'dashboard/myQueue.tpl', 20, false),array('function', 'fbvElement', 'dashboard/myQueue.tpl', 33, false),array('function', 'load_url_in_div', 'dashboard/myQueue.tpl', 45, false),array('modifier', 'json_encode', 'dashboard/myQueue.tpl', 20, false),array('modifier', 'assign', 'dashboard/myQueue.tpl', 44, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "submissions.md",'section' => "my-queue",'class' => 'pkp_help_tab'), $this);?>


<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_AUTHOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#contextSubmissionForm').pkpHandler('$.pkp.controllers.dashboard.form.DashboardTaskFormHandler',
			{
				singleContextSubmissionUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submission','op' => 'wizard','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				trackFormChanges: false
			}
		);
	});
</script>
<?php endif; ?>
<div class="pkp_context_sidebar">
	<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_AUTHOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
	<div class="pkp_tab_actions">
		<form id="contextSubmissionForm">
			<ul>
				<li>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','id' => 'singleContext','label' => "submission.submit.newSubmissionSingle"), $this);?>

				</li>
			</ul>
		</form>
	</div>
	<?php endif; ?>
</div>

<div class="pkp_content_panel">
	<!-- Unassigned submissions grid: If the user is a manager or a series editor, then display these submissions which have not been assigned to anyone -->
	<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_GUEST_EDITOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.unassignedSubmissions.UnassignedSubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'unassignedSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'unassignedSubmissionsListGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'unassignedSubmissionsListGridContainer','url' => $this->_tpl_vars['unassignedSubmissionsListGridUrl']), $this);?>

	<?php endif; ?>

	<!-- Assigned submissions grid: Show all submissions the user is assigned to (besides their own) -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.assignedSubmissions.AssignedSubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'assignedSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'assignedSubmissionsListGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'assignedSubmissionsListGridContainer','url' => $this->_tpl_vars['assignedSubmissionsListGridUrl']), $this);?>


	<!-- Author and editor submissions grid -->
	<?php if (array_intersect ( array ( ROLE_ID_AUTHOR , ROLE_ID_MANAGER , ROLE_ID_GUEST_EDITOR , ROLE_ID_SUB_EDITOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.mySubmissions.MySubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'mySubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'mySubmissionsListGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'mySubmissionsListGridContainer','url' => $this->_tpl_vars['mySubmissionsListGridUrl']), $this);?>

	<?php endif; ?>
</div>