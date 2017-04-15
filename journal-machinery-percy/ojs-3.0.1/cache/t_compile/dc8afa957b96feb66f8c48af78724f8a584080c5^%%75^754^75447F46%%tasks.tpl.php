<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:17
         compiled from controllers/page/tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/page/tasks.tpl', 22, false),array('modifier', 'assign', 'controllers/page/tasks.tpl', 36, false),array('function', 'url', 'controllers/page/tasks.tpl', 23, false),array('function', 'translate', 'controllers/page/tasks.tpl', 30, false),array('function', 'load_url_in_div', 'controllers/page/tasks.tpl', 37, false),)), $this); ?>

<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#userTasks').pkpHandler(
			'$.pkp.pages.header.TasksHandler',
			{
				requestedPage: <?php echo ((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				fetchUnreadNotificationsCountUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.notifications.NotificationsGridHandler",'op' => 'getUnreadNotificationsCount','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>
<div id="userTasks">
	<a href="#" id="notificationsToggle">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.tasks"), $this);?>

		<span id="unreadNotificationCount" class="task-count<?php if ($this->_tpl_vars['unreadNotificationCount']): ?> hasTasks<?php endif; ?>">
			<?php echo $this->_tpl_vars['unreadNotificationCount']; ?>

		</span>
	</a>
	<div id="notificationsPopover" class="panel">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.notifications.TaskNotificationsGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'notificationsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'notificationsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'notificationsGrid','url' => $this->_tpl_vars['notificationsGridUrl']), $this);?>

	</div>
</div>