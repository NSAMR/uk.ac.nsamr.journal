<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:52
         compiled from controllers/tab/settings/formImageView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/tab/settings/formImageView.tpl', 15, false),array('modifier', 'date_format', 'controllers/tab/settings/formImageView.tpl', 29, false),array('function', 'translate', 'controllers/tab/settings/formImageView.tpl', 20, false),)), $this); ?>

<div class="pkp_form_file_view pkp_form_image_view">

	<div class="img">
		<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
?<?php echo $this->_tpl_vars['file']['dateUploaded']; ?>
" alt="<?php echo $this->_tpl_vars['commonAltText']; ?>
" />
	</div>

	<div class="data">
		<span class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>

		</span>
		<span class="value">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</span>
		<span class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.uploadedDate"), $this);?>

		</span>
		<span class="value">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>

		</span>
		<span class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altText"), $this);?>

		</span>
		<span class="value">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</span>

		<div id="<?php echo $this->_tpl_vars['deleteLinkAction']->getId(); ?>
" class="actions">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['deleteLinkAction'],'contextId' => $this->_tpl_vars['fileSettingName'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>
</div>