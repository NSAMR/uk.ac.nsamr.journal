<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:19
         compiled from linkAction/linkActionOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'linkAction/linkActionOptions.tpl', 22, false),)), $this); ?>

{
	<?php if ($this->_tpl_vars['selfActivate']): ?>
		selfActivate: <?php echo $this->_tpl_vars['selfActivate']; ?>
,
	<?php endif; ?>
	staticId: <?php echo ((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
	<?php $this->assign('actionRequest', $this->_tpl_vars['action']->getActionRequest()); ?>
	actionRequest: <?php echo ((is_array($_tmp=$this->_tpl_vars['actionRequest']->getJSLinkActionRequest())) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
	actionRequestOptions: {
		<?php $_from = $this->_tpl_vars['actionRequest']->getLocalizedOptions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['actionRequestOptions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['actionRequestOptions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['optionName'] => $this->_tpl_vars['optionValue']):
        $this->_foreach['actionRequestOptions']['iteration']++;
?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['optionName'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['optionValue'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
		<?php endforeach; endif; unset($_from); ?>
	}
}