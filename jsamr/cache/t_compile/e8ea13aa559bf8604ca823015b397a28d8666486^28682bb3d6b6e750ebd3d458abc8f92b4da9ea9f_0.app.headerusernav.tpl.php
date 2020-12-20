<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:53
  from 'app:headerusernav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc39d76577_82929040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28682bb3d6b6e750ebd3d458abc8f92b4da9ea9f' => 
    array (
      0 => 'app:headerusernav.tpl',
      1 => 1605315574,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfbc39d76577_82929040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

	<?php } elseif ($_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#navigationContextMenu').pkpHandler(
				'$.pkp.controllers.MenuHandler');
	});
<?php echo '</script'; ?>
>

<ul id="navigationContextMenu" class="pkp_nav_context pkp_nav_list" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.siteContext"),$_smarty_tpl ) ) ));?>
">

	<li <?php if ($_smarty_tpl->tpl_vars['multipleContexts']->value) {?>class="submenuOpensBelow" aria-haspopup="true" aria-expanded="false"<?php }?>>
		<span class="pkp_screen_reader">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"context.current"),$_smarty_tpl ) );?>

		</span>

		<a href="<?php if ($_smarty_tpl->tpl_vars['multipleContexts']->value) {?>#<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"submissions"),$_smarty_tpl ) );
}?>" class="pkp_current_context">
			<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value ));?>

			<?php } elseif ($_smarty_tpl->tpl_vars['currentContextName']->value) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentContextName']->value ));?>

			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applicationName']->value ));?>

			<?php }?>
		</a>

		<?php if ($_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
			<h3 class="pkp_screen_reader">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"context.select"),$_smarty_tpl ) );?>

			</h3>
			<ul class="pkp_contexts">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contextsNameAndUrl']->value, 'name', false, 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['currentContextName']->value == $_smarty_tpl->tpl_vars['name']->value) {
continue 1;
}?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>

						</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	</li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		// Attach the JS file tab handler.
		$(function() {
			$('#navigationTasks').pkpHandler(
					'$.pkp.controllers.MenuHandler');
		});
	<?php echo '</script'; ?>
>
	<ul id="navigationTasks" class="pkp_nav_tasks pkp_nav_list" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.tasks"),$_smarty_tpl ) ) ));?>
">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'fetchTaskUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"page.PageHandler",'op'=>"tasks",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "tasksNavPlaceholder", null);?>
			<a href="#">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.tasks"),$_smarty_tpl ) );?>

				<span class="pkp_spinner"></span>
			</a>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_el'][0], array( array('el'=>"li",'class'=>"pkp_tasks",'id'=>"userTasksWrapper",'url'=>$_smarty_tpl->tpl_vars['fetchTaskUrl']->value,'placeholder'=>$_smarty_tpl->tpl_vars['tasksNavPlaceholder']->value),$_smarty_tpl ) );?>

	</ul>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#navigationUser').pkpHandler(
				'$.pkp.controllers.MenuHandler');
	});
<?php echo '</script'; ?>
>
<ul id="navigationUser" class="pkp_nav_user pkp_nav_list" role="navigation" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['supportedLocales']->value) && count($_smarty_tpl->tpl_vars['supportedLocales']->value)) {?>
		<li class="languages" aria-haspopup="true" aria-expanded="false">
			<a href="#">
				<span class="fa fa-globe"></span>
				<?php echo $_smarty_tpl->tpl_vars['supportedLocales']->value[$_smarty_tpl->tpl_vars['currentLocale']->value];?>

			</a>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportedLocales']->value, 'localeName', false, 'localeKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['localeKey']->value != $_smarty_tpl->tpl_vars['currentLocale']->value) {?>
						<li>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value),$_smarty_tpl ) );?>
">
								<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

							</a>
						</li>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['homeUrl']->value) {?>
		<li class="view_frontend">
			<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
">
				<span class="fa fa-eye"></span>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.viewFrontend"),$_smarty_tpl ) );?>

			</a>
		</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
		<li class="user" aria-haspopup="true" aria-expanded="false">
			<a href="#">
				<span class="fa fa-user"></span>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loggedInUsername']->value ));?>

			</a>
			<ul>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"user",'op'=>"profile"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.viewProfile"),$_smarty_tpl ) );?>

					</a>
				</li>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['isUserLoggedInAs']->value) {?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"login",'op'=>"signOutAsUser"),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.logOutAs"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loggedInUsername']->value ));?>

						</a>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"login",'op'=>"signOut"),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.logOut"),$_smarty_tpl ) );?>

						</a>
					<?php }?>
				</li>
			</ul>
		</li>
	<?php }?>
</ul>
<?php }
}
