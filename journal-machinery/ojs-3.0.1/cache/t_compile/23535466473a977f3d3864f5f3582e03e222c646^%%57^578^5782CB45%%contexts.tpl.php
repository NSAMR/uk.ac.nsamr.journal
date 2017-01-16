<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:03
         compiled from admin/contexts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/contexts.tpl', 33, false),array('function', 'load_url_in_div', 'admin/contexts.tpl', 34, false),array('modifier', 'assign', 'admin/contexts.tpl', 33, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "journal.journals"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#contexts').pkpHandler(
				'$.pkp.pages.admin.ContextsHandler');
	});
</script>

<div class="pkp_page_content pkp_page_admin">

	<div id="contexts">
		<?php if ($this->_tpl_vars['openWizardLinkAction']): ?>
			<div id="<?php echo $this->_tpl_vars['openWizardLinkAction']->getId(); ?>
" class="pkp_linkActions inline">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['openWizardLinkAction'],'contextId' => 'contexts','selfActivate' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.journal.JournalGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'journalsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'journalsUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'journalGridContainer','url' => $this->_tpl_vars['journalsUrl']), $this);?>

	</div>

</div><!-- .pkp_page_content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>