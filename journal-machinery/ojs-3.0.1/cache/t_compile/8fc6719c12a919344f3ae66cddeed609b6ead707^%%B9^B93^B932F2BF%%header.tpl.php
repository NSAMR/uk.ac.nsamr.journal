<?php /* Smarty version 2.6.25-dev, created on 2017-02-08 19:49:47
         compiled from frontend/components/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'frontend/components/header.tpl', 22, false),array('modifier', 'assign', 'frontend/components/header.tpl', 23, false),array('modifier', 'escape', 'frontend/components/header.tpl', 25, false),array('modifier', 'default', 'frontend/components/header.tpl', 25, false),array('function', 'translate', 'frontend/components/header.tpl', 23, false),array('function', 'url', 'frontend/components/header.tpl', 47, false),)), $this); ?>
<?php echo ''; ?><?php echo ''; ?><?php $this->assign('showingLogo', true); ?><?php echo ''; ?><?php if ($this->_tpl_vars['displayPageHeaderTitle'] && ! $this->_tpl_vars['displayPageHeaderLogo'] && is_string ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?><?php echo ''; ?><?php $this->assign('showingLogo', false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<!DOCTYPE html>
<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/headerHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="pkp_page_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
 pkp_op_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
<?php if ($this->_tpl_vars['showingLogo']): ?> has_site_logo<?php endif; ?>">

	<div class="cmp_skip_to_content">
		<a href="#pkp_content_main"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.skip.main"), $this);?>
</a>
		<a href="#pkp_content_nav"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.skip.nav"), $this);?>
</a>
		<a href="#pkp_content_footer"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.skip.footer"), $this);?>
</a>
	</div>
	<div class="pkp_structure_page">

				<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
			<div class="pkp_head_wrapper">

				<div class="pkp_site_name_wrapper">
										<?php if ($this->_tpl_vars['requestedOp'] == 'index'): ?>
						<h1 class="pkp_site_name">
					<?php else: ?>
						<div class="pkp_site_name">
					<?php endif; ?>
						<?php if ($this->_tpl_vars['currentContext'] && $this->_tpl_vars['multipleContexts']): ?>
							<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'homeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'homeUrl'));?>

						<?php endif; ?>
						<?php if ($this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderLogo'] )): ?>
							<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_img">
								<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogo']['altText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?> />
							</a>
						<?php elseif ($this->_tpl_vars['displayPageHeaderTitle'] && ! $this->_tpl_vars['displayPageHeaderLogo'] && is_string ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
							<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_text"><?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>
</a>
						<?php elseif ($this->_tpl_vars['displayPageHeaderTitle'] && ! $this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
							<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_img">
								<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
							</a>
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['homeUrl']; ?>
" class="is_img">
								<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/structure/logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['applicationName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['applicationName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="180" height="90" />
							</a>
						<?php endif; ?>
					<?php if ($this->_tpl_vars['requestedOp'] == 'index'): ?>
						</h1>
					<?php else: ?>
						</div>
					<?php endif; ?>
				</div>

								<?php if ($this->_tpl_vars['currentContext']): ?>
					<nav id="pkp_content_nav" class="pkp_navigation_primary_row navDropdownMenu" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.site"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
						<div class="pkp_navigation_primary_wrapper">

														<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/primaryNavMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

														<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/searchForm_simple.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
					</nav>
				<?php endif; ?>

				<nav class="pkp_navigation_user_wrapper navDropdownMenu" id="navigationUserWrapper" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.user"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
					<ul id="navigationUser" class="pkp_navigation_user pkp_nav_list">
						<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
							<li class="profile <?php if ($this->_tpl_vars['unreadNotificationCount']): ?> has_tasks<?php endif; ?>" aria-haspopup="true" aria-expanded="false">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submissions'), $this);?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									<span class="task_count">
										<?php echo $this->_tpl_vars['unreadNotificationCount']; ?>

									</span>
								</a>
								<ul>
									<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_ASSISTANT , ROLE_ID_REVIEWER , ROLE_ID_AUTHOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
										<li>
											<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submissions'), $this);?>
">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.dashboard"), $this);?>

												<span class="task_count">
													<?php echo $this->_tpl_vars['unreadNotificationCount']; ?>

												</span>
											</a>
										</li>
									<?php endif; ?>
									<li>
										<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'profile'), $this);?>
">
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.viewProfile"), $this);?>

										</a>
									</li>
									<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
									<li>
										<a href="<?php if ($this->_tpl_vars['multipleContexts']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'context' => 'index','page' => 'admin','op' => 'index'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'admin','op' => 'index'), $this);?>
<?php endif; ?>">
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.admin"), $this);?>

										</a>
									</li>
									<?php endif; ?>
									<li>
										<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login','op' => 'signOut'), $this);?>
">
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOut"), $this);?>

										</a>
									</li>
									<?php if ($this->_tpl_vars['isUserLoggedInAs']): ?>
										<li>
											<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login','op' => 'signOutAsUser'), $this);?>
">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOutAs"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

											</a>
										</li>
									<?php endif; ?>
								</ul>
							</li>
						<?php else: ?>
							<?php if (! $this->_tpl_vars['disableUserReg']): ?>
								<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
							<?php endif; ?>
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
						<?php endif; ?>
					</ul>
				</nav><!-- .pkp_navigation_user_wrapper -->

			</div><!-- .pkp_head_wrapper -->
		</header><!-- .pkp_structure_head -->

				<?php if ($this->_tpl_vars['isFullWidth']): ?>
			<?php $this->assign('hasSidebar', 0); ?>
		<?php endif; ?>
		<div class="pkp_structure_content<?php if ($this->_tpl_vars['hasSidebar']): ?> has_sidebar<?php endif; ?>">
			<div id="pkp_content_main" class="pkp_structure_main" role="main">