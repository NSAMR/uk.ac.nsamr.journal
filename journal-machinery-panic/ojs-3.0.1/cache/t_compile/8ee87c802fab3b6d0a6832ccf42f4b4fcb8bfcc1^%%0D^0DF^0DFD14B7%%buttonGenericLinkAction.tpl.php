<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:36
         compiled from linkAction/buttonGenericLinkAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'linkAction/buttonGenericLinkAction.tpl', 19, false),)), $this); ?>

<script>
	$(function() {
		$('<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonSelector'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkActionOptions.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>);
	});
</script>