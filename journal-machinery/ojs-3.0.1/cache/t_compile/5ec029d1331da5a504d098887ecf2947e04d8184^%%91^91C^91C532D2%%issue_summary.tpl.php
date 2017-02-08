<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 23:18:03
         compiled from frontend/objects/issue_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/issue_summary.tpl', 21, false),array('modifier', 'escape', 'frontend/objects/issue_summary.tpl', 22, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/issue_summary.tpl', 44, false),array('modifier', 'nl2br', 'frontend/objects/issue_summary.tpl', 44, false),)), $this); ?>
<div class="issue-summary media">

		<?php $this->assign('issueTitle', $this->_tpl_vars['issue']->getLocalizedTitle()); ?>
	<?php $this->assign('issueSeries', $this->_tpl_vars['issue']->getIssueSeries()); ?>

		<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImage()): ?>
		<div class="media-left">
			<a class="cover" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
">
				<img class="media-object" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverImagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['issue']->getLocalizedCoverImage(); ?>
">
			</a>
		</div>
	<?php endif; ?>


	<div class="media-body">
		<h2 class="media-heading">
			<a class="title" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
">
				<?php if ($this->_tpl_vars['issueTitle']): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issueTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issueSeries'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<?php endif; ?>
			</a>
			<?php if ($this->_tpl_vars['issueTitle']): ?>
				<div class="series lead">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issueSeries'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				</div>
			<?php endif; ?>
		</h2>
		<div class="description">
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issueDescription'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

		</div>
	</div>
</div><!-- .issue-summary -->