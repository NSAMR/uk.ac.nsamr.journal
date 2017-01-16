<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:56:04
         compiled from common/loadingContainer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/loadingContainer.tpl', 14, false),)), $this); ?>

<div class="pkp_loading">
	<span class="pkp_spinner"></span>
	<span class="message"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.loading"), $this);?>
</span>
</div>