<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'app:formcheckbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37e36591_25999630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e541fd0f18163d6ffb33aa29523d8f667844cbcc' => 
    array (
      0 => 'app:formcheckbox.tpl',
      1 => 1605315574,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfbc37e36591_25999630 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li<?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['FBV_label']->value) {?>
		<label>
	<?php }?>
	<input type="checkbox" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
" <?php echo $_smarty_tpl->tpl_vars['FBV_checkboxParams']->value;?>
 class="field checkbox<?php if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_validation']->value ));
}
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required<?php }?>"<?php if ($_smarty_tpl->tpl_vars['FBV_checked']->value) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required aria-required="true"<?php }?>/>
	<?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_label']->value),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_keepLabelHtml']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FBV_label']->value) {?>
		</label>
	<?php }?>
</li>
<?php }
}
