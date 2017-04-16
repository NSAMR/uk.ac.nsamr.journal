<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:21
         compiled from common/urlInEl.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/urlInEl.tpl', 15, false),array('modifier', 'json_encode', 'common/urlInEl.tpl', 18, false),)), $this); ?>

<script>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['inElElId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : smarty_modifier_escape($_tmp, 'js')); ?>
').pkpHandler(
			'$.pkp.controllers.UrlInDivHandler',
			{
				sourceUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['inElUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<<?php echo $this->_tpl_vars['inEl']; ?>
 id="<?php echo ((is_array($_tmp=$this->_tpl_vars['inElElId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['inElClass']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['inElClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['inElPlaceholder']; ?>
</<?php echo $this->_tpl_vars['inEl']; ?>
>