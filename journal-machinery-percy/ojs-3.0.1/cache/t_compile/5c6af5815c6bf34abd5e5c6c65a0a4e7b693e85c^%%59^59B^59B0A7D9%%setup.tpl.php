<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:18
         compiled from core:controllers/tab/settings/appearance/form/setup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:controllers/tab/settings/appearance/form/setup.tpl', 16, false),array('modifier', 'json_encode', 'core:controllers/tab/settings/appearance/form/setup.tpl', 16, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#appearanceForm').pkpHandler('$.pkp.controllers.tab.settings.form.FileViewFormHandler',
			{
				fetchFileUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchFile','tab' => 'appearance','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<?php if ($this->_tpl_vars['wizardMode']): ?>
	<?php $this->assign('wizardClass', 'is_wizard_mode'); ?>
<?php else: ?>
	<?php $this->assign('wizardClass', ""); ?>
<?php endif; ?>