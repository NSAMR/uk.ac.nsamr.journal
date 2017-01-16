<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 16:04:34
         compiled from frontend/pages/indexJournal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/pages/indexJournal.tpl', 23, false),array('function', 'translate', 'frontend/pages/indexJournal.tpl', 35, false),array('function', 'url', 'frontend/pages/indexJournal.tpl', 47, false),array('modifier', 'escape', 'frontend/pages/indexJournal.tpl', 27, false),array('modifier', 'count', 'frontend/pages/indexJournal.tpl', 32, false),array('modifier', 'strip_unsafe_html', 'frontend/pages/indexJournal.tpl', 68, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['currentJournal']->getLocalizedName())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page_index_journal">

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Index::journal"), $this);?>


	<?php if ($this->_tpl_vars['homepageImage']): ?>
		<div class="homepage_image">
			<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		</div>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['numAnnouncementsHomepage'] && count($this->_tpl_vars['announcements'])): ?>
		<div class="cmp_announcements highlight_first">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>

			</h2>
			<?php $_from = $this->_tpl_vars['announcements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['announcements'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['announcements']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['announcement']):
        $this->_foreach['announcements']['iteration']++;
?>
				<?php if ($this->_foreach['announcements']['iteration'] > $this->_tpl_vars['numAnnouncementsHomepage']): ?>
					<?php break; ?>
				<?php endif; ?>
				<?php if ($this->_foreach['announcements']['iteration'] == 1): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/announcement_summary.tpl", 'smarty_include_vars' => array('heading' => 'h3')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<div class="more">
				<?php else: ?>
					<article class="obj_announcement_summary">
						<h4>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</a>
						</h4>
						<div class="date">
							<?php echo $this->_tpl_vars['announcement']->getDatePosted(); ?>

						</div>
					</article>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</div><!-- .more -->
		</div>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['issue']): ?>
		<div class="current_issue">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>

			</h2>
			<div class="current_issue_title">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/issue_toc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this);?>
" class="read_more">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.viewAllIssues"), $this);?>

			</a>
		</div>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['additionalHomeContent']): ?>
		<div class="additional_content">
			<?php echo $this->_tpl_vars['additionalHomeContent']; ?>

		</div>
	<?php endif; ?>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>