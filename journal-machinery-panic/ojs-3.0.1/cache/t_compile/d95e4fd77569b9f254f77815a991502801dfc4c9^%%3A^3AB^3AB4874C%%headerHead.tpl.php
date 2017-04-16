<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:59
         compiled from core:common/headerHead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'core:common/headerHead.tpl', 11, false),array('modifier', 'strip_tags', 'core:common/headerHead.tpl', 13, false),array('function', 'load_header', 'core:common/headerHead.tpl', 15, false),array('function', 'load_stylesheet', 'core:common/headerHead.tpl', 16, false),array('function', 'load_script', 'core:common/headerHead.tpl', 17, false),)), $this); ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitleTranslated'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</title>

	<?php echo $this->_plugins['function']['load_header'][0][0]->smartyLoadHeader(array('context' => 'backend','headers' => $this->_tpl_vars['headers']), $this);?>

	<?php echo $this->_plugins['function']['load_stylesheet'][0][0]->smartyLoadStylesheet(array('context' => 'backend','stylesheets' => $this->_tpl_vars['stylesheets']), $this);?>

	<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'backend','scripts' => $this->_tpl_vars['scripts']), $this);?>

</head>