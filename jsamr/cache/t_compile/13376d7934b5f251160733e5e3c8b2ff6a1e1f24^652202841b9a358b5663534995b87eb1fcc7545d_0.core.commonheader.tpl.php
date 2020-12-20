<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'core:commonheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37d6a364_39522060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652202841b9a358b5663534995b87eb1fcc7545d' => 
    array (
      0 => 'core:commonheader.tpl',
      1 => 1605315574,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'core:common/headerHead.tpl' => 1,
    'app:controllers/notification/notificationOptions.tpl' => 1,
  ),
),false)) {
function content_5fdfbc37d6a364_39522060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ian/Projects/jsamr/jsamr/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pageTitleTranslated', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("core:common/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )))===null||$tmp==='' ? "index" : $tmp);?>
 pkp_op_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )))===null||$tmp==='' ? "index" : $tmp);?>
" dir="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentLocaleLangDir']->value )))===null||$tmp==='' ? "ltr" : $tmp);?>
">
	<?php echo '<script'; ?>
 type="text/javascript">
		// Initialise JS handler.
		$(function() {
			$('body').pkpHandler(
				'$.pkp.controllers.SiteHandler',
				{
					<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
						inlineHelpState: <?php echo $_smarty_tpl->tpl_vars['initialHelpState']->value;?>
,
					<?php }?>
					toggleHelpUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"toggleHelp",'escape'=>false),$_smarty_tpl ) ));?>
,
					toggleHelpOnText: <?php echo json_encode($_smarty_tpl->tpl_vars['toggleHelpOnText']->value);?>
,
					toggleHelpOffText: <?php echo json_encode($_smarty_tpl->tpl_vars['toggleHelpOffText']->value);?>
,
					<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/notificationOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				});
		});
	<?php echo '</script'; ?>
>
	<div class="pkp_structure_page">
		<header class="pkp_structure_head" role="banner">
			<div class="pkp_navigation" id="headerNavigationContainer">

								<div class="pkp_site_name">
					<?php if ($_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'homeUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'homeUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img">
							<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
" <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php }?>>
						</a>
					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img">
							<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/templates/images/structure/logo.png">
						</a>
					<?php }?>
				</div>

								<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
					<?php echo '<script'; ?>
 type="text/javascript">
						// Attach the JS file tab handler.
						$(function() {
							$('#navigationPrimary').pkpHandler(
									'$.pkp.controllers.MenuHandler');
						});
					 <?php echo '</script'; ?>
>
					<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.site"),$_smarty_tpl ) ) ));?>
">

												<?php if ((count((array) $_smarty_tpl->tpl_vars['userRoles']->value) === 1 && in_array(ROLE_ID_READER,(array) $_smarty_tpl->tpl_vars['userRoles']->value))) {?>
							<li>
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"author.submit"),$_smarty_tpl ) );?>

								</a>
							</li>
						<?php }?>

						<?php if (array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR,ROLE_ID_ASSISTANT,ROLE_ID_REVIEWER,ROLE_ID_AUTHOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
							<li>
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"submissions"),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.submissions"),$_smarty_tpl ) );?>

								</a>
							</li>
						<?php }?>

						<?php echo $_smarty_tpl->tpl_vars['appSpecificMenuItems']->value;?>


						<?php if (array_intersect(array(ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value) && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getData('enableAnnouncements')) {?>
							<li>
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"announcements"),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>

								</a>
							</li>
						<?php }?>

						<?php if (array_intersect(array(ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.settings"),$_smarty_tpl ) );?>
</a>
								<ul>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['contextSettingsUrl']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"context.context"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"website"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.website"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"workflow"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.workflow"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"distribution"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.distribution"),$_smarty_tpl ) );?>
</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.access"),$_smarty_tpl ) );?>
</a>
								<ul>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"access",'anchor'=>"users"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.users"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"access",'anchor'=>"roles"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.roles"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"settings",'path'=>"access",'anchor'=>"access"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.siteAccessOptions.siteAccessOptions"),$_smarty_tpl ) );?>
</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.tools"),$_smarty_tpl ) );?>
</a>
								<ul>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"tools",'anchor'=>"importexport"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.tools.importExport"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"tools",'anchor'=>"statistics"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"tools",'anchor'=>"permissions"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"settings.libraryFiles.category.permissions"),$_smarty_tpl ) );?>
</a></li>
								</ul>
							</li>
						<?php }?>

						<?php if (array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.tools.statistics"),$_smarty_tpl ) );?>
</a>
								<ul>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"stats",'op'=>"publications"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.publications"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"stats",'op'=>"editorial"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.editorialActivity"),$_smarty_tpl ) );?>
</a></li>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"stats",'op'=>"users"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.users"),$_smarty_tpl ) );?>
</a></li>
								<?php if (array_intersect(array(ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"tools",'anchor'=>"statistics"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports"),$_smarty_tpl ) );?>
</a></li>
								<?php }?>
								</ul>
							</li>
						<?php }?>
						<?php if (array_intersect(array(ROLE_ID_SITE_ADMIN),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
							<?php if ($_smarty_tpl->tpl_vars['currentContext']->value && !array_intersect(array(ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
							<li>
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"management",'op'=>"access",'anchor'=>"users"),$_smarty_tpl ) );?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.access"),$_smarty_tpl ) );?>

								</a>
							</li>
							<?php }?>
							<li>
								<a href="<?php if ($_smarty_tpl->tpl_vars['multipleContexts']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'context'=>"index",'page'=>"admin",'op'=>"index"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"admin",'op'=>"index"),$_smarty_tpl ) );
}?>">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.admin"),$_smarty_tpl ) );?>

								</a>
							</li>
						<?php }?>
					</ul>
				<?php }?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'fetchHeaderUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"page.PageHandler",'op'=>"userNavBackend",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('class'=>"pkp_navigation_user",'id'=>"navigationUserWrapper",'url'=>$_smarty_tpl->tpl_vars['fetchHeaderUrl']->value),$_smarty_tpl ) );?>

			</div><!-- pkp_navigation -->
		</header>

		<div class="pkp_structure_content">

			<?php echo '<script'; ?>
 type="text/javascript">
				// Attach the JS page handler to the main content wrapper.
				$(function() {
					$('div.pkp_structure_main').pkpHandler('$.pkp.controllers.PageHandler');
				});
			<?php echo '</script'; ?>
>

			<div class="pkp_structure_main" role="main">
								<?php if (!$_smarty_tpl->tpl_vars['suppressPageTitle']->value) {?>
					<div class="pkp_page_title">
						<h1><?php echo $_smarty_tpl->tpl_vars['pageTitleTranslated']->value;?>
</h1>
					</div>
				<?php }
}
}
