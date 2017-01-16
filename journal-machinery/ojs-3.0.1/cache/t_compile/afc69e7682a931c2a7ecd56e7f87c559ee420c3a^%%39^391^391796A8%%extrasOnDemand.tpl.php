<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:04
         compiled from controllers/extrasOnDemand.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/extrasOnDemand.tpl', 19, false),)), $this); ?>
<script>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo $this->_tpl_vars['id']; ?>
').pkpHandler(
			'$.pkp.controllers.ExtrasOnDemandHandler');
	});
</script>
<div id="<?php echo $this->_tpl_vars['id']; ?>
" class="pkp_controllers_extrasOnDemand">
	<a href="#" class="toggleExtras">
		<span class="toggleExtras-inactive"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['moreDetailsText']), $this);?>
</span>
		<span class="toggleExtras-active"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['lessDetailsText']), $this);?>
</span>
		<span class="fa fa-plus"></span>
	</a>
	<div class="extrasContainer container">
		<?php echo $this->_tpl_vars['extraContent']; ?>

	</div>
</div>