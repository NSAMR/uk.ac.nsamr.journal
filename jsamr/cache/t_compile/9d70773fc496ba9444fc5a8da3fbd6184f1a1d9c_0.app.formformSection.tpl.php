<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'app:formformSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37e02149_92936102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d70773fc496ba9444fc5a8da3fbd6184f1a1d9c' => 
    array (
      0 => 'app:formformSection.tpl',
      1 => 1605315574,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfbc37e02149_92936102 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div <?php if ($_smarty_tpl->tpl_vars['FBV_id']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
" <?php }?>class="section <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value ));?>
">
	<?php if ($_smarty_tpl->tpl_vars['FBV_label']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "FBV_labelTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_label']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php } else {
$_smarty_tpl->_assignInScope('FBV_labelTranslated', $_smarty_tpl->tpl_vars['FBV_Label']->value);
}?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_labelFor']->value) {?><label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_labelFor']->value ));?>
"><?php echo $_smarty_tpl->tpl_vars['FBV_labelTranslated']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?></label>
		<?php } else { ?><span class="label"><?php echo $_smarty_tpl->tpl_vars['FBV_labelTranslated']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?></span><?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FBV_description']->value) {?><label class="description"><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_description']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_description']->value;
}?></label><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['FBV_listSection']->value) {?><ul class="checkbox_and_radiobutton"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_title']->value) {?><label <?php if ($_smarty_tpl->tpl_vars['FBV_labelFor']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_labelFor']->value ));?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_title']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_title']->value;
}
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?></label><?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_sectionErrors']->value, 'FBV_error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FBV_error']->value) {
?>
				<span class="error"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_error']->value ));?>
</span>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php echo $_smarty_tpl->tpl_vars['FBV_content']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['FBV_listSection']->value) {?></ul><?php }?>
</div>
<?php }
}
