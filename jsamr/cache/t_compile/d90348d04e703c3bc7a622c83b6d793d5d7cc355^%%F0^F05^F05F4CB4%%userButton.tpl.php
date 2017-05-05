<?php /* Smarty version 2.6.25-dev, created on 2017-05-05 09:40:32
         compiled from frontend/components/userButton.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/userButton.tpl', 12, false),array('function', 'url', 'frontend/components/userButton.tpl', 15, false),array('modifier', 'escape', 'frontend/components/userButton.tpl', 12, false),)), $this); ?>

<!--USER BUTTON-->
<ul id="navigationUser" class="nav nav-pills tab-list pull-right" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.user"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
	<li>
		<a class="dropdown-toggle user-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submissions'), $this);?>
">
			<i class="fa fa-user"></i><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

			<span class="badge">
				<?php echo $this->_tpl_vars['unreadNotificationCount']; ?>

			</span>
		</a>
		<ul class="dropdown-menu dropdown-menu-right dropdown-menu-user">
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'gettingStarted'), $this);?>
">
					Get Started
				</a>
			</li>
			<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_ASSISTANT , ROLE_ID_REVIEWER , ROLE_ID_AUTHOR ) , $this->_tpl_vars['userRoles'] )): ?>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submissions'), $this);?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.dashboard"), $this);?>

					<span class="badge pull-right">
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
			<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN ) , $this->_tpl_vars['userRoles'] )): ?>
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
	<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
	<li><span><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'register'), $this);?>
" class="btn btn-topbar btn-lg btn-action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
 <i class="fa fa-chevron-right"></i></a></span></li>
	<?php endif; ?>
	<li><span><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'login'), $this);?>
"  class="btn btn-topbar btn-lg btn-action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
 <i class="fa fa-user"></i></span></a></li>
	<?php endif; ?>
</ul><!--END USER BUTTON-->