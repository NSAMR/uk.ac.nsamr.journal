<?php /* Smarty version 2.6.25-dev, created on 2017-05-05 09:40:32
         compiled from frontend/components/header-fullwidth.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'frontend/components/header-fullwidth.tpl', 22, false),array('modifier', 'assign', 'frontend/components/header-fullwidth.tpl', 23, false),array('modifier', 'escape', 'frontend/components/header-fullwidth.tpl', 25, false),array('modifier', 'default', 'frontend/components/header-fullwidth.tpl', 25, false),array('function', 'translate', 'frontend/components/header-fullwidth.tpl', 23, false),)), $this); ?>

		<?php $this->assign('showingLogo', true); ?>
	<?php if ($this->_tpl_vars['displayPageHeaderTitle'] && ! $this->_tpl_vars['displayPageHeaderLogo'] && is_string ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
	<?php $this->assign('showingLogo', false); ?>
	<?php endif; ?>

	<!DOCTYPE html>
	<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
	<?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>
<?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:frontend/components/headerHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<body class="pkp_page_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
 pkp_op_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')); ?>
<?php if ($this->_tpl_vars['showingLogo']): ?> has_site_logo<?php endif; ?>">
		<div class="pkp_structure_page">

			<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
				<h2 id="accessible-menu-label">
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.accessible_menu.label"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>

				</h2>
				<ul>
					<li><a href="#main-navigation"><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.accessible_menu.main_navigation"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
</a></li>
					<li><a href="#main-content"><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.accessible_menu.main_content"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
</a></li>
					<li><a href="#sidebar"><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.bootstrap3.accessible_menu.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
</a></li>
				</ul>
			</nav>

						<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">


		        <!--TOP BAR-->
		        <div class="top-bar dark">
		            <div class="container">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <ul class="list-inline">                           
		                            <li>
		                                <a href="https://www.facebook.com/NSAMRStudent/" class="social-icon si-dark si-gray-round si-colored-facebook">
		                                    <i class="fa fa-facebook"></i>
		                                    <i class="fa fa-facebook"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://twitter.com/nsamr?lang=en" class="social-icon si-dark si-gray-round si-colored-twitter">
		                                    <i class="fa fa-twitter"></i>
		                                    <i class="fa fa-twitter"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.youtube.com/channel/UC8cJMUFNymJG0QoI73V7vZA" class="social-icon si-dark si-gray-round si-colored-google-plus">
		                                    <i class="fa fa-youtube"></i>
		                                    <i class="fa fa-youtube"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://www.linkedin.com/company/national-student-association-of-medical-research-nsamr-" class="social-icon si-dark si-gray-round si-colored-linkedin">
		                                    <i class="fa fa-linkedin"></i>
		                                    <i class="fa fa-linkedin"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="https://github.com/NSAMR" class="social-icon si-dark si-gray-round si-colored-github">
		                                    <i class="fa fa-github"></i>
		                                    <i class="fa fa-github"></i>
		                                </a>
		                            </li> 
		                        </ul>
		                    </div>
		                    <div class="col-sm-6 text-right">
		                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/userButton.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		                    </div>

		                </div>
		            </div>
		        </div><!--END TOP BAR-->




				<!--START STATIC NAVBAR-->
				<nav class="navbar navbar-default yamm">
					<div class="container">
						<div class="navbar-header navbar-header-logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
"><img class="img-responsive" src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogo']['altText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?>></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/primaryNavMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
						</div><!--/.nav-collapse -->
					</div><!--/.container -->
				</nav><!--END STATIC NAVBAR-->

			</header><!-- .pkp_structure_head -->


							<main class="pkp_structure_main" role="main">

