<?php /* Smarty version 2.6.25-dev, created on 2017-02-06 21:26:01
         compiled from frontend/components/editLink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/editLink.tpl', 22, false),array('function', 'url', 'frontend/components/editLink.tpl', 25, false),array('modifier', 'assign', 'frontend/components/editLink.tpl', 22, false),)), $this); ?>
<?php if (in_array ( ROLE_ID_MANAGER , ( array ) $this->_tpl_vars['userRoles'] )): ?>

		<?php if ($this->_tpl_vars['sectionTitleKey']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['sectionTitleKey']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sectionTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sectionTitle'));?>

	<?php endif; ?>

	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => $this->_tpl_vars['page'],'op' => $this->_tpl_vars['op'],'path' => $this->_tpl_vars['path'],'anchor' => $this->_tpl_vars['anchor']), $this);?>
" class="btn btn-default btn-xs">
		<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>


				<span class="sr-only">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.goToEditPage",'sectionTitle' => $this->_tpl_vars['sectionTitle']), $this);?>

		</span>
	</a>
<?php endif; ?>