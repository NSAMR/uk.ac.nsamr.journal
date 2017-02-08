<?php /* Smarty version 2.6.25-dev, created on 2017-02-06 21:25:43
         compiled from frontend/objects/article_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/article_summary.tpl', 23, false),array('function', 'call_hook', 'frontend/objects/article_summary.tpl', 63, false),array('modifier', 'escape', 'frontend/objects/article_summary.tpl', 24, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/article_summary.tpl', 32, false),)), $this); ?>
<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])); ?>
<?php if (( ! $this->_tpl_vars['section']['hideAuthor'] && $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_DEFAULT ) || $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_SHOW): ?>
	<?php $this->assign('showAuthor', true); ?>
<?php endif; ?>

<div class="article-summary media">
	<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage()): ?>
		<div class="cover media-left">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
" class="file">
				<img class="media-object" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicFilesDir'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImage())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
			</a>
		</div>
	<?php endif; ?>

	<div class="media-body">
		<h3 class="media-heading">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

			</a>
		</h3>

		<?php if ($this->_tpl_vars['showAuthor'] || $this->_tpl_vars['article']->getPages() || ( $this->_tpl_vars['article']->getDatePublished() && $this->_tpl_vars['showDatePublished'] )): ?>

			<?php if ($this->_tpl_vars['showAuthor']): ?>
				<div class="meta">
					<?php if ($this->_tpl_vars['showAuthor']): ?>
						<div class="authors">
							<?php echo $this->_tpl_vars['article']->getAuthorString(); ?>

						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['article']->getPages()): ?>
				<p class="pages">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				</p>
			<?php endif; ?>

			<div class="btn-group" role="group">
				<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
	</div>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Issue::Issue::Article"), $this);?>

</div><!-- .article-summary -->