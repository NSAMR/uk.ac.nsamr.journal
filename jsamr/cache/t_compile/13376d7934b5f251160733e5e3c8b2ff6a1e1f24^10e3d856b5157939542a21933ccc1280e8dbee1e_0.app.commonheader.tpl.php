<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'app:commonheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37d1def6_71420599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e3d856b5157939542a21933ccc1280e8dbee1e' => 
    array (
      0 => 'app:commonheader.tpl',
      1 => 1605314898,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:common/header.tpl' => 1,
  ),
),false)) {
function content_5fdfbc37d1def6_71420599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "appSpecificMenuItems", null);?>
	<?php if (array_intersect(array(ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<li aria-haspopup="true" aria-expanded="false">
			<a name="issues" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.navigation.issues"),$_smarty_tpl ) );?>
</a>
			<ul>
				<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"manageIssues",'anchor'=>"futureIssues"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.futureIssues"),$_smarty_tpl ) );?>
</a></li>
				<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"manageIssues",'anchor'=>"backIssues"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.backIssues"),$_smarty_tpl ) );?>
</a></li>
			</ul>
		</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value && $_smarty_tpl->tpl_vars['currentJournal']->value->getData('paymentsEnabled') && array_intersect(array(ROLE_ID_SITE_ADMIN,ROLE_ID_MANAGER,ROLE_ID_SUBSCRIPTION_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<li aria-haspopup="true" aria-expanded="false">
			<a name="payments" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.payments"),$_smarty_tpl ) );?>
</a>
			<ul>
				<li><a name="individualSubscription" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"individualSubscription"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptionManager.individualSubscriptions"),$_smarty_tpl ) );?>
</a></li>
				<li><a name="institutionalSubscriptions" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"institutionalSubscriptions"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptionManager.institutionalSubscriptions"),$_smarty_tpl ) );?>
</a></li>
				<li><a name="subscriptionTypes" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"subscriptionTypes"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"subscriptionManager.subscriptionTypes"),$_smarty_tpl ) );?>
</a></li>
				<li><a name="subscriptionPolicies" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"subscriptionPolicies"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies"),$_smarty_tpl ) );?>
</a></li>
				<li><a name="paymentTypes" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"paymentTypes"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.paymentTypes"),$_smarty_tpl ) );?>
</a></li>
				<li><a name="payments" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"payments",'anchor'=>"payments"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.payments"),$_smarty_tpl ) );?>
</a></li>
			</ul>
		</li>
	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("core:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('appSpecificMenuItems'=>$_smarty_tpl->tpl_vars['appSpecificMenuItems']->value), 0, false);
}
}
