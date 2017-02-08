<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 22:58:07
         compiled from frontend/pages/indexJournal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/pages/indexJournal.tpl', 25, false),array('function', 'translate', 'frontend/pages/indexJournal.tpl', 44, false),array('function', 'url', 'frontend/pages/indexJournal.tpl', 71, false),array('modifier', 'escape', 'frontend/pages/indexJournal.tpl', 29, false),array('modifier', 'count', 'frontend/pages/indexJournal.tpl', 40, false),array('modifier', 'strip_unsafe_html', 'frontend/pages/indexJournal.tpl', 68, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['currentJournal']->getLocalizedName())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main-content" class="page_index_journal" role="content">

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Index::journal"), $this);?>


	<?php if ($this->_tpl_vars['homepageImage']): ?>
		<div class="homepage-image">
			<img class="img-responsive" src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['journalDescription']): ?>
		<div class="journal-description">
			<?php echo $this->_tpl_vars['journalDescription']; ?>

		</div>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['numAnnouncementsHomepage'] && ((is_array($_tmp=$this->_tpl_vars['announcements'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
		<section class="cmp_announcements media">
			<header class="page-header">
				<h2>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>

				</h2>
			</header>
			<div class="media-list">
				<?php $_from = $this->_tpl_vars['announcements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['announcements'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['announcements']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['announcement']):
        $this->_foreach['announcements']['iteration']++;
?>
					<?php if ($this->_foreach['announcements']['iteration'] > $this->_tpl_vars['numAnnouncementsHomepage']): ?>
						<?php break; ?>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/announcement_summary.tpl", 'smarty_include_vars' => array('heading' => 'h3')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		</section>
	<?php endif; ?>


		<?php if ($this->_tpl_vars['issue']): ?>
		<section class="current_issue">
			<header class="page-header">
				<h2>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>

				</h2>
			</header>
			<p class="current_issue_title lead">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			</p>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/issue_toc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'issue','op' => 'archive'), $this);?>
" class="btn btn-primary read-more">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.viewAllIssues"), $this);?>

				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</section>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['additionalHomeContent']): ?>
		<section class="additional_content">
			<?php echo $this->_tpl_vars['additionalHomeContent']; ?>

		</section>
	<?php endif; ?>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>