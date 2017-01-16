<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:03
         compiled from core:common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'core:common/header.tpl', 11, false),array('modifier', 'assign', 'core:common/header.tpl', 12, false),array('modifier', 'escape', 'core:common/header.tpl', 14, false),array('modifier', 'default', 'core:common/header.tpl', 14, false),array('modifier', 'json_encode', 'core:common/header.tpl', 24, false),array('function', 'translate', 'core:common/header.tpl', 12, false),array('function', 'url', 'core:common/header.tpl', 24, false),array('function', 'load_url_in_el', 'core:common/header.tpl', 71, false),array('function', 'load_url_in_div', 'core:common/header.tpl', 120, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:common/headerHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="pkp_page_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
 pkp_op_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
">
	<script type="text/javascript">
		// Initialise JS handler.
		$(function() {
			$('body').pkpHandler(
				'$.pkp.controllers.SiteHandler',
				{
					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
						inlineHelpState: <?php echo $this->_tpl_vars['initialHelpState']; ?>
,
					<?php endif; ?>
					toggleHelpUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'toggleHelp','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					toggleHelpOnText: <?php echo ((is_array($_tmp=$this->_tpl_vars['toggleHelpOnText'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					toggleHelpOffText: <?php echo ((is_array($_tmp=$this->_tpl_vars['toggleHelpOffText'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/notification/notificationOptions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				});
		});
	</script>
	<div class="pkp_structure_page">
		<header class="pkp_structure_head" role="banner">
			<div class="pkp_navigation" id="headerNavigationContainer">

								<div class="pkp_site_name">
					<?php if ($this->_tpl_vars['currentContext'] && $this->_tpl_vars['multipleContexts']): ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderLogo'] )): ?>
						<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_img">
							<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogo']['altText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?>>
						</a>
					<?php else: ?>
						<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_img">
							<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/structure/logo.png">
						</a>
					<?php endif; ?>
				</div>

								<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<script type="text/javascript">
						// Attach the JS file tab handler.
						$(function() {
							$('#navigationPrimary').pkpHandler(
									'$.pkp.controllers.MenuHandler');
						});
					 </script>
					<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.site"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">

						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "page.PageHandler",'op' => 'tasks','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchTaskUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchTaskUrl'));?>

						<?php ob_start(); ?>
							<a href="#">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.tasks"), $this);?>

								<span class="pkp_spinner"></span>
							</a>
						<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tasksNavPlaceholder', ob_get_contents());ob_end_clean(); ?>
						<?php echo $this->_plugins['function']['load_url_in_el'][0][0]->smartyLoadUrlInEl(array('el' => 'li','class' => 'pkp_tasks','id' => 'userTasksWrapper','url' => $this->_tpl_vars['fetchTaskUrl'],'placeholder' => $this->_tpl_vars['tasksNavPlaceholder']), $this);?>


						<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR , ROLE_ID_ASSISTANT , ROLE_ID_REVIEWER , ROLE_ID_AUTHOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
							<li>
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submissions'), $this);?>
">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.submissions"), $this);?>

								</a>
							</li>
						<?php endif; ?>

						<?php echo $this->_tpl_vars['appSpecificMenuItems']; ?>


						<?php if (array_intersect ( array ( ROLE_ID_MANAGER ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.settings"), $this);?>
</a>
								<ul>
									<li><a href="<?php echo $this->_tpl_vars['contextSettingsUrl']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "context.context"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'website'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.website"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'publication'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.workflow"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'distribution'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.distribution"), $this);?>
</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'access'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.access"), $this);?>
</a>
								<ul>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'access','anchor' => 'users'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.users"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'access','anchor' => 'roles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.roles"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'access','anchor' => 'siteAccessOptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.siteAccessOptions.siteAccessOptions"), $this);?>
</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'tools','path' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools"), $this);?>
</a>
								<ul>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'tools','anchor' => 'importexport'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools.importExport"), $this);?>
</a></li>
									<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'tools','anchor' => 'statistics'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools.statistics"), $this);?>
</a></li>
								</ul>
							</li>
						<?php endif; ?>
						<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
							<li>
								<a href="<?php if ($this->_tpl_vars['multipleContexts']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'context' => 'index','page' => 'admin','op' => 'index'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'admin','op' => 'index'), $this);?>
<?php endif; ?>">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.admin"), $this);?>

								</a>
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "page.PageHandler",'op' => 'userNavBackend','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchHeaderUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchHeaderUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('class' => 'pkp_navigation_user','id' => 'navigationUserWrapper','url' => $this->_tpl_vars['fetchHeaderUrl']), $this);?>

			</div><!-- pkp_navigation -->
		</header>

		<div class="pkp_structure_content">

			<script type="text/javascript">
				// Attach the JS page handler to the main content wrapper.
				$(function() {
					$('div.pkp_structure_main').pkpHandler('$.pkp.controllers.PageHandler');
				});
			</script>

			<div class="pkp_structure_main" role="main">
								<?php if (! $this->_tpl_vars['suppressPageTitle']): ?>
					<div class="pkp_page_title">
						<h1><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h1>
					</div>
				<?php endif; ?>