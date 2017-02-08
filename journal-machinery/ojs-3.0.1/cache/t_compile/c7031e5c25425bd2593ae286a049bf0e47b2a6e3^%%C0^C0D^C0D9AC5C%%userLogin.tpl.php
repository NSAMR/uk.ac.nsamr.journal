<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:50:39
         compiled from frontend/pages/userLogin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/userLogin.tpl', 21, false),array('function', 'csrf', 'frontend/pages/userLogin.tpl', 26, false),array('function', 'url', 'frontend/pages/userLogin.tpl', 59, false),array('modifier', 'strip_unsafe_html', 'frontend/pages/userLogin.tpl', 34, false),array('modifier', 'escape', 'frontend/pages/userLogin.tpl', 34, false),array('modifier', 'assign', 'frontend/pages/userLogin.tpl', 78, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "user.login")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_login">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "user.login")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['loginMessage']): ?>
		<p>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['loginMessage']), $this);?>

		</p>
	<?php endif; ?>

	<form class="cmp_form cmp_form login" id="login" method="post" action="<?php echo $this->_tpl_vars['loginUrl']; ?>
">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


		<?php if ($this->_tpl_vars['error']): ?>
			<div class="pkp_form_error">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['error'],'reason' => $this->_tpl_vars['reason']), $this);?>

			</div>
		<?php endif; ?>

		<input type="hidden" name="source" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

		<fieldset class="fields">
			<div class="username">
				<label>
					<span class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>

						<span class="required">*</span>
						<span class="pkp_screen_reader">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

						</span>
					</span>
					<input type="text" name="username" id="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="32" required>
				</label>
			</div>
			<div class="password">
				<label>
					<span class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>

						<span class="required">*</span>
						<span class="pkp_screen_reader">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

						</span>
					</span>
					<input type="password" name="password" id="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" password="true" maxlength="32" required="$passwordRequired">
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'lostPassword'), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.forgotPassword"), $this);?>

					</a>
				</label>
			</div>
			<div class="remember checkbox">
				<label>
					<input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
					<span class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.rememberUsernameAndPassword"), $this);?>

					</span>
				</label>
			</div>
			<div class="buttons">
				<button class="submit" type="submit">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>

				</button>

				<?php if (! $this->_tpl_vars['disableUserReg']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register','source' => $this->_tpl_vars['source']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'registerUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'registerUrl'));?>

					<a href="<?php echo $this->_tpl_vars['registerUrl']; ?>
" class="register">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registerNewAccount"), $this);?>

					</a>
				<?php endif; ?>
			</div>
		</fieldset>
	</form>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>