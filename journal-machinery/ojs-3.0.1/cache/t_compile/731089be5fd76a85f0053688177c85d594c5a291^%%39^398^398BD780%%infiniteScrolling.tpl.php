<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:45
         compiled from controllers/grid/feature/infiniteScrolling.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/feature/infiniteScrolling.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['iterator']->getCount()): ?>
	<div class="gridPagingScrolling">
		<?php if ($this->_tpl_vars['moreItemsLinkAction']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['moreItemsLinkAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<span class="item_count">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.items.shownTotal",'shown' => $this->_tpl_vars['shown'],'total' => $this->_tpl_vars['iterator']->getCount()), $this);?>

		</span>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/loadingContainer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<?php endif; ?>