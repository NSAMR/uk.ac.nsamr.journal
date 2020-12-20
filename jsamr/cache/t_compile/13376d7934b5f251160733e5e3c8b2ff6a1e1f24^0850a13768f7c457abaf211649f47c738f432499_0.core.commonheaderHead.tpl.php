<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'core:commonheaderHead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37d75599_64307815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0850a13768f7c457abaf211649f47c738f432499' => 
    array (
      0 => 'core:commonheaderHead.tpl',
      1 => 1605315574,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfbc37d75599_64307815 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value);?>
</title>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], array( array('context'=>"backend"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], array( array('context'=>"backend"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"backend"),$_smarty_tpl ) );?>

</head>
<?php }
}
