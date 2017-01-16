<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 16:04:30
         compiled from controllers/grid/gridActionsBelow.tpl */ ?>

<ul class="actions btm">
	<?php $_from = $this->_tpl_vars['grid']->getActions(@GRID_ACTION_POSITION_BELOW); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
		<li>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['gridId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>