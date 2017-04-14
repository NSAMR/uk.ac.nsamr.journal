<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:15:13
         compiled from frontend/objects/issue_toc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/issue_toc.tpl', 33, false),array('function', 'translate', 'frontend/objects/issue_toc.tpl', 75, false),array('modifier', 'escape', 'frontend/objects/issue_toc.tpl', 34, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/issue_toc.tpl', 43, false),array('modifier', 'date_format', 'frontend/objects/issue_toc.tpl', 77, false),)), $this); ?>
<div class="issue-toc">

		<?php if (! $this->_tpl_vars['issue']->getPublished()): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'warning','messageKey' => "editor.issues.preview")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

		<div class="heading row">
		<?php $this->assign('issueDetailsCol', '12'); ?>

				<?php $this->assign('issueCover', $this->_tpl_vars['issue']->getLocalizedCoverImageUrl()); ?>
		<?php if ($this->_tpl_vars['issueCover']): ?>
			<?php $this->assign('issueDetailsCol', '8'); ?>
			<div class="thumbnail col-md-4">
				<a class="cover" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','page' => 'issue','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
					<img class="img-responsive" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['issueCover'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImageAltText() != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
				</a>
			</div>
		<?php endif; ?>

		<div class="issue-details col-md-<?php echo $this->_tpl_vars['issueDetailsCol']; ?>
">

			<?php if ($this->_tpl_vars['issue']->hasDescription()): ?>
				<div class="description">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

				</div>
			<?php endif; ?>

						<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
				<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
					<?php $this->assign('pubId', $this->_tpl_vars['issue']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
				<?php else: ?>
					<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['issue'])); ?>				<?php endif; ?>
				<?php if ($this->_tpl_vars['pubId']): ?>
					<?php $this->assign('doiUrl', ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
					<p class="pub_id <?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
						<strong>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
:
						</strong>
						<?php if ($this->_tpl_vars['doiUrl']): ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
								<?php echo $this->_tpl_vars['doiUrl']; ?>

							</a>
						<?php else: ?>
							<?php echo $this->_tpl_vars['pubId']; ?>

						<?php endif; ?>
					</p>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

						<?php if ($this->_tpl_vars['issue']->getDatePublished()): ?>
				<p class="published">
					<strong>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>
:
					</strong>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				</p>
			<?php endif; ?>
		</div>
	</div>

		<?php if ($this->_tpl_vars['issueGalleys'] && ( $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['showGalleyLinks'] )): ?>
		<div class="galleys">
			<div class="page-header">
				<h2>
					<small><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.fullIssue"), $this);?>
</small>
				</h2>
			</div>
			<div class="btn-group" role="group">
				<?php $_from = $this->_tpl_vars['issueGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['issue'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
	<?php endif; ?>

		<div class="sections">
		<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
			<section class="section">
				<?php if ($this->_tpl_vars['section']['articles']): ?>
					<?php if ($this->_tpl_vars['section']['title']): ?>
						<div class="page-header">
							<h2>
								<small><?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</small>
							</h2>
						</div>
					<?php endif; ?>
					<div class="media-list">
						<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/article_summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
			</section>
		<?php endforeach; endif; unset($_from); ?>
	</div><!-- .sections -->
</div><!-- .issue-toc -->