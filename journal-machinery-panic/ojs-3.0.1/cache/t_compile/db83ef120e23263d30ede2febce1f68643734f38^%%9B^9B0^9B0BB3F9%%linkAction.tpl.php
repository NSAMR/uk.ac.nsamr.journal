<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:10:22
         compiled from linkAction/linkAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'linkAction/linkAction.tpl', 20, false),array('modifier', 'uniqid', 'linkAction/linkAction.tpl', 25, false),)), $this); ?>

<?php if ($this->_tpl_vars['contextId']): ?>
	<?php $this->assign('staticId', ((is_array($_tmp=$this->_tpl_vars['contextId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-", $this->_tpl_vars['action']->getId(), "-button") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-", $this->_tpl_vars['action']->getId(), "-button"))); ?>
<?php else: ?>
	<?php $this->assign('staticId', ((is_array($_tmp=$this->_tpl_vars['action']->getId())) ? $this->_run_mod_handler('concat', true, $_tmp, "-button") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-button"))); ?>
<?php endif; ?>

<?php $this->assign('buttonId', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['staticId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkActionButton.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'buttonId' => $this->_tpl_vars['buttonId'],'anyhtml' => $this->_tpl_vars['anyhtml'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script>
		$(function() {
		$('#<?php echo $this->_tpl_vars['buttonId']; ?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkActionOptions.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'selfActivate' => $this->_tpl_vars['selfActivate'],'staticId' => $this->_tpl_vars['staticId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			);
	});
</script>