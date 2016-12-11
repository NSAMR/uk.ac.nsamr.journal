<?php /* Smarty version 2.6.25-dev, created on 2016-12-11 12:58:25
         compiled from file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/blocks/languageToggle/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/blocks/languageToggle/block.tpl', 13, false),array('function', 'url', 'file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/blocks/languageToggle/block.tpl', 20, false),array('modifier', 'escape', 'file:/home/nsamr/www/www.nsamr.ac.uk/journal/jnsamr/plugins/blocks/languageToggle/block.tpl', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['enableLanguageToggle']): ?>
<div class="pkp_block block_language">
	<span class="title">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.language"), $this);?>

	</span>

	<div class="content">
		<ul>
			<?php $_from = $this->_tpl_vars['languageToggleLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
				<li class="locale_<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['localeKey'] == $this->_tpl_vars['currentLocale']): ?> current<?php endif; ?>">
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'setLocale','path' => $this->_tpl_vars['localeKey'],'source' => $_SERVER['REQUEST_URI']), $this);?>
">
						<?php echo $this->_tpl_vars['localeName']; ?>

					</a>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
</div><!-- .block_language -->
<?php endif; ?>