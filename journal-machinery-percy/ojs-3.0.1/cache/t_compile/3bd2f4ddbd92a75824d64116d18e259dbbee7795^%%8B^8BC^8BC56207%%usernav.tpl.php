<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 20:34:17
         compiled from header/usernav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'header/usernav.tpl', 11, false),array('function', 'translate', 'header/usernav.tpl', 24, false),array('modifier', 'assign', 'header/usernav.tpl', 11, false),array('modifier', 'escape', 'header/usernav.tpl', 24, false),array('modifier', 'count', 'header/usernav.tpl', 67, false),)), $this); ?>
<?php if ($this->_tpl_vars['currentContext']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

<?php elseif ($this->_tpl_vars['multipleContexts']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('context' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

<?php endif; ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#navigationContextMenu').pkpHandler(
				'$.pkp.controllers.MenuHandler');
	});
</script>

<ul id="navigationContextMenu" class="pkp_nav_context pkp_nav_list" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.siteContext"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">

	<li <?php if ($this->_tpl_vars['multipleContexts']): ?>class="submenuOpensBelow"<?php endif; ?> aria-haspopup="true" aria-expanded="false">
		<span class="pkp_screen_reader">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "context.current"), $this);?>

		</span>

		<a href="#" class="pkp_current_context">
			<?php if ($this->_tpl_vars['displayPageHeaderTitle'] && is_string ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
				<?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>

			<?php elseif ($this->_tpl_vars['currentContextName']): ?>
				<?php echo $this->_tpl_vars['currentContextName']; ?>

			<?php else: ?>
				<?php echo $this->_tpl_vars['applicationName']; ?>

			<?php endif; ?>
		</a>

		<?php if ($this->_tpl_vars['multipleContexts']): ?>
			<h3 class="pkp_screen_reader">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "context.select"), $this);?>

			</h3>
			<ul class="pkp_contexts">
				<?php $_from = $this->_tpl_vars['contextsNameAndUrl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['url'] => $this->_tpl_vars['name']):
?>
					<?php if ($this->_tpl_vars['currentContextName'] == $this->_tpl_vars['name']): ?><?php continue; ?><?php endif; ?>
					<li>
						<a href="<?php echo $this->_tpl_vars['url']; ?>
">
							<?php echo $this->_tpl_vars['name']; ?>

						</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php endif; ?>
	</li>
</ul>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#navigationUser').pkpHandler(
				'$.pkp.controllers.MenuHandler');
	});
</script>
<ul id="navigationUser" class="pkp_nav_user pkp_nav_list" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.user"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
	<?php if (count($this->_tpl_vars['supportedLocales'])): ?>
		<li class="languages" aria-haspopup="true" aria-expanded="false">
			<a href="#">
				<span class="fa fa-globe"></span>
				<?php echo $this->_tpl_vars['supportedLocales'][$this->_tpl_vars['currentLocale']]; ?>

			</a>
			<ul>
				<?php $_from = $this->_tpl_vars['supportedLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
					<?php if ($this->_tpl_vars['localeKey'] != $this->_tpl_vars['currentLocale']): ?>
						<li>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'setLocale','path' => $this->_tpl_vars['localeKey'],'source' => $_SERVER['REQUEST_URI']), $this);?>
">
								<?php echo $this->_tpl_vars['localeName']; ?>

							</a>
						</li>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['homeUrl']): ?>
		<li class="view_frontend">
			<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
">
				<span class="fa fa-eye"></span>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.viewFrontend"), $this);?>

			</a>
		</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<li class="user" aria-haspopup="true" aria-expanded="false">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'profile'), $this);?>
">
				<span class="fa fa-user"></span>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

			</a>
			<ul>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'profile'), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.viewProfile"), $this);?>

					</a>
				</li>
				<li>
					<?php if ($this->_tpl_vars['isUserLoggedInAs']): ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login','op' => 'signOutAsUser'), $this);?>
">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOutAs"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

						</a>
					<?php else: ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login','op' => 'signOut'), $this);?>
">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOut"), $this);?>

						</a>
					<?php endif; ?>
				</li>
			</ul>
		</li>
	<?php endif; ?>
</ul>