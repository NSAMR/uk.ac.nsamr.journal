<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 21:03:51
  from 'core:commonfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdfbc37e7d2d4_53475054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a9b4555266ef87547cee73b625c48c2a2c0f10a' => 
    array (
      0 => 'core:commonfooter.tpl',
      1 => 1605315574,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'app:common/loadingContainer.tpl' => 1,
  ),
),false)) {
function content_5fdfbc37e7d2d4_53475054 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div><!-- pkp_structure_main -->
</div><!-- pkp_structure_body -->

<div class="pkp_structure_footer" role="contentinfo">
	<div class="pkp_brand_footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['pkpLink']->value;?>
">
			<img alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>(($tmp = @"common.publicKnowledgeProject")===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl ) );?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
		</a>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	// Initialize JS handler
	$(function() {
		$('#pkpHelpPanel').pkpHandler(
			'$.pkp.controllers.HelpPanelHandler',
			{
				helpUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"help",'escape'=>false),$_smarty_tpl ) ));?>
,
				helpLocale: '<?php echo substr($_smarty_tpl->tpl_vars['currentLocale']->value,0,2);?>
',
			}
		);
	});
<?php echo '</script'; ?>
>
<div id="pkpHelpPanel" class="pkp_help_panel" tabindex="-1">
	<div class="panel">
		<div class="header">
			<a href="#" class="pkpHomeHelpPanel home">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.toc"),$_smarty_tpl ) );?>

			</a>
			<a href="#" class="pkpCloseHelpPanel close">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.close"),$_smarty_tpl ) );?>

			</a>
		</div>
		<div class="content">
			<?php $_smarty_tpl->_subTemplateRender("app:common/loadingContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
		<div class="footer">
			<a href="#" class="pkpPreviousHelpPanel previous">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.previous"),$_smarty_tpl ) );?>

			</a>
			<a href="#" class="pkpNextHelpPanel next">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.next"),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>
</div>

</body>
</html>
<?php }
}
