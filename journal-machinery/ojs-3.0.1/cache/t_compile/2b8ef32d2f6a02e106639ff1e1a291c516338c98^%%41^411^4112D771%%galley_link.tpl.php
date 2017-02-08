<?php /* Smarty version 2.6.25-dev, created on 2017-02-06 21:25:43
         compiled from frontend/objects/galley_link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/galley_link.tpl', 52, false),array('function', 'translate', 'frontend/objects/galley_link.tpl', 58, false),array('modifier', 'to_array', 'frontend/objects/galley_link.tpl', 52, false),array('modifier', 'escape', 'frontend/objects/galley_link.tpl', 65, false),)), $this); ?>

<?php if ($this->_tpl_vars['journalOverride']): ?>
	<?php $this->assign('currentJournal', $this->_tpl_vars['journalOverride']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['galley']->isPdfGalley()): ?>
	<?php $this->assign('type', 'pdf'); ?>
<?php else: ?>
	<?php $this->assign('type', 'file'); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['parent'] instanceOf Issue): ?>
	<?php $this->assign('page', 'issue'); ?>
	<?php $this->assign('parentId', $this->_tpl_vars['parent']->getBestIssueId()); ?>
<?php else: ?>
	<?php $this->assign('page', 'article'); ?>
	<?php $this->assign('parentId', $this->_tpl_vars['parent']->getBestArticleId()); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['hasAccess']): ?>
	<?php if ($this->_tpl_vars['restrictOnlyPdf'] && type == 'pdf'): ?>
		<?php $this->assign('restricted', '1'); ?>
	<?php elseif (! $this->_tpl_vars['restrictOnlyPdf']): ?>
		<?php $this->assign('restricted', '1'); ?>
	<?php endif; ?>
<?php endif; ?>

<a class="galley-link btn btn-galley role="button" <?php echo $this->_tpl_vars['type']; ?>
<?php if ($this->_tpl_vars['restricted']): ?> restricted<?php endif; ?>" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => $this->_tpl_vars['page'],'op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['parentId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
">

		<?php if ($this->_tpl_vars['restricted']): ?>
		<span class="sr-only">
			<?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

			<?php endif; ?>
		</span>
	<?php endif; ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

</a>