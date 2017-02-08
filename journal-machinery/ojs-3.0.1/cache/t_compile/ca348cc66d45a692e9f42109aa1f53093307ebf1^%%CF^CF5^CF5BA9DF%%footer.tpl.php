<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 22:58:03
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:common/footer.tpl', 16, false),array('function', 'translate', 'core:common/footer.tpl', 17, false),array('modifier', 'json_encode', 'core:common/footer.tpl', 31, false),array('modifier', 'substr', 'core:common/footer.tpl', 32, false),)), $this); ?>

</div><!-- pkp_structure_main -->
</div><!-- pkp_structure_body -->

<div class="pkp_structure_footer" role="contentinfo">
	<div class="pkp_brand_footer">
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'aboutThisPublishingSystem'), $this);?>
">
			<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['packageKey']), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['brandImage']; ?>
">
		</a>
		<a href="<?php echo $this->_tpl_vars['pkpLink']; ?>
">
			<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.publicKnowledgeProject"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/pkp_brand.png">
		</a>
	</div>
</div>

<script type="text/javascript">
	// Initialize JS handler
	$(function() {
		$('#pkpHelpPanel').pkpHandler(
			'$.pkp.controllers.HelpPanelHandler',
			{
				helpUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'help','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				helpLocale: '<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 2) : substr($_tmp, 0, 2)); ?>
',
			}
		);
	});
</script>
<div id="pkpHelpPanel" class="pkp_help_panel" tabindex="-1">
	<div class="panel">
		<div class="header">
			<a href="#" class="pkpHomeHelpPanel home">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.toc"), $this);?>

			</a>
			<a href="#" class="pkpCloseHelpPanel close">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>

			</a>
		</div>
		<div class="content">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/loadingContainer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="footer">
			<a href="#" class="pkpPreviousHelpPanel previous">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.previous"), $this);?>

			</a>
			<a href="#" class="pkpNextHelpPanel next">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.next"), $this);?>

			</a>
		</div>
	</div>
</div>

</body>
</html>