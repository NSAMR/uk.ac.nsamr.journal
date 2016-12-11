<?php /* Smarty version 2.6.25-dev, created on 2016-12-11 12:58:25
         compiled from file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/generic/customBlockManager/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/generic/customBlockManager/block.tpl', 11, false),)), $this); ?>
<div class="pkp_block block_custom" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['customBlockId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
	<div class="content">
		<?php echo $this->_tpl_vars['customBlockContent']; ?>

	</div>
</div>