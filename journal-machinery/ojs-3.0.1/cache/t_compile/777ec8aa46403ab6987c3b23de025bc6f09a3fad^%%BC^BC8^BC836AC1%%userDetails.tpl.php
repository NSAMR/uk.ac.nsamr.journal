<?php /* Smarty version 2.6.25-dev, created on 2017-01-16 15:59:04
         compiled from common/userDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'common/userDetails.tpl', 29, false),array('block', 'fbvFormSection', 'common/userDetails.tpl', 30, false),array('function', 'fbvElement', 'common/userDetails.tpl', 31, false),array('function', 'translate', 'common/userDetails.tpl', 37, false),array('function', 'call_hook', 'common/userDetails.tpl', 111, false),array('modifier', 'escape', 'common/userDetails.tpl', 44, false),)), $this); ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userDetails')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.name")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.firstName",'required' => 'true','id' => 'firstName','value' => $this->_tpl_vars['firstName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.middleName",'id' => 'middleName','value' => $this->_tpl_vars['middleName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.lastName",'required' => 'true','id' => 'lastName','value' => $this->_tpl_vars['lastName'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['disableUserNameSection']): ?>
		<?php if (! $this->_tpl_vars['userId']): ?><?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.usernameRestriction"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('usernameInstruction', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'username','description' => $this->_tpl_vars['usernameInstruction'],'translate' => false)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if (! $this->_tpl_vars['userId']): ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.username",'id' => 'username','required' => 'true','value' => $this->_tpl_vars['username'],'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','label' => "common.suggest",'id' => 'suggestUsernameButton','inline' => true,'class' => 'default'), $this);?>

			<?php else: ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.username",'suppressId' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['disableEmailSection']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "about.contact")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'id' => 'email','required' => 'true','value' => $this->_tpl_vars['email'],'maxlength' => '90','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['disableAuthSourceSection']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.authSource",'for' => 'authId')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'authId','id' => 'authId','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['authSourceOptions'],'translate' => 'true','selected' => $this->_tpl_vars['authId']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['disablePasswordSection']): ?>
		<?php if ($this->_tpl_vars['userId']): ?><?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.leavePasswordBlank"), $this);?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.form.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('passwordInstruction', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'passwordSection','title' => "user.password")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'password','description' => $this->_tpl_vars['passwordInstruction'],'translate' => false)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.password",'required' => $this->_tpl_vars['passwordRequired'],'name' => 'password','id' => 'password','password' => 'true','value' => $this->_tpl_vars['password'],'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.repeatPassword",'required' => $this->_tpl_vars['passwordRequired'],'name' => 'password2','id' => 'password2','password' => 'true','value' => $this->_tpl_vars['password2'],'maxlength' => '32','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php if (! $this->_tpl_vars['userId']): ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.generatePassword",'for' => 'generatePassword','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['generatePassword']): ?>
						<?php $this->assign('checked', true); ?>
					<?php else: ?>
						<?php $this->assign('checked', false); ?>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'generatePassword','id' => 'generatePassword','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.generatePasswordDescription",'translate' => 'true'), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.mustChangePassword",'for' => 'mustChangePassword','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['mustChangePassword']): ?>
					<?php $this->assign('checked', true); ?>
				<?php else: ?>
					<?php $this->assign('checked', false); ?>
				<?php endif; ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'mustChangePassword','id' => 'mustChangePassword','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.mustChangePasswordDescription",'translate' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['countryRequired']): ?>
		<?php $this->assign('countryRequired', true); ?>
	<?php else: ?>
		<?php $this->assign('countryRequired', false); ?>
	<?php endif; ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'country','title' => "common.country")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "common.country",'name' => 'country','id' => 'country','required' => $this->_tpl_vars['countryRequired'],'defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country'],'translate' => '0','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['disableSendNotifySection']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.notifyUser",'for' => 'sendNotify','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['sendNotify']): ?>
				<?php $this->assign('checked', true); ?>
			<?php else: ?>
				<?php $this->assign('checked', false); ?>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => 'sendNotify','id' => 'sendNotify','checked' => $this->_tpl_vars['checked'],'label' => "grid.user.notifyUserDescription",'translate' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Common::UserDetails::AdditionalItems"), $this);?>

<?php ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userFormExtendedLeft')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if (! $this->_tpl_vars['disableGenderSection']): ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "user.gender",'name' => 'gender','id' => 'gender','defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['genderOptions'],'translate' => 'true','selected' => $this->_tpl_vars['gender'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php endif; ?>
			<?php if (! $this->_tpl_vars['disableSalutationSection']): ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.salutation",'name' => 'salutation','id' => 'salutation','value' => $this->_tpl_vars['salutation'],'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.suffix",'id' => 'suffix','value' => $this->_tpl_vars['suffix'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

			<?php if (! $this->_tpl_vars['disableInitialsSection']): ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.initials",'name' => 'initials','id' => 'initials','value' => $this->_tpl_vars['initials'],'maxlength' => '5','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.url",'name' => 'userUrl','id' => 'userUrl','value' => $this->_tpl_vars['userUrl'],'maxlength' => '255','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php if (! $this->_tpl_vars['disablePhoneSection']): ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.phone",'name' => 'phone','id' => 'phone','value' => $this->_tpl_vars['phone'],'maxlength' => '24','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.orcid",'name' => 'orcid','id' => 'orcid','value' => $this->_tpl_vars['orcid'],'maxlength' => '36','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if (! $this->_tpl_vars['disableLocaleSection'] && count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.workingLanguages",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
					<?php if ($this->_tpl_vars['userLocales'] && in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?>
						<?php $this->assign('checked', true); ?>
					<?php else: ?>
						<?php $this->assign('checked', false); ?>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => "userLocales[]",'id' => "userLocales-".($this->_tpl_vars['localeKey']),'value' => $this->_tpl_vars['localeKey'],'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['localeName'],'translate' => false), $this);?>

				<?php endforeach; endif; unset($_from); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php if (! $this->_tpl_vars['disableInterestsSection']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'interests')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'interests','id' => 'interests','interests' => $this->_tpl_vars['interests'],'label' => "user.interests"), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'affiliation')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.affiliation",'multilingual' => 'true','name' => 'affiliation','id' => 'affiliation','value' => $this->_tpl_vars['affiliation'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "user.biography",'multilingual' => 'true','name' => 'biography','id' => 'biography','rich' => true,'value' => $this->_tpl_vars['biography']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if (! $this->_tpl_vars['disableMailingSection']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "common.mailingAddress",'name' => 'mailingAddress','id' => 'mailingAddress','rich' => true,'value' => $this->_tpl_vars['mailingAddress']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php if (! $this->_tpl_vars['disableSignatureSection']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "user.signature",'multilingual' => 'true','name' => 'signature','id' => 'signature','value' => $this->_tpl_vars['signature'],'rich' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('extraContent', ob_get_contents());ob_end_clean(); ?>

<?php if ($this->_tpl_vars['extraContentSectionUnfolded']): ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.userDetails")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_tpl_vars['extraContent']; ?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
	<div id="userExtraFormFields" class="left full">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'userExtras','widgetWrapper' => "#userExtraFormFields",'moreDetailsText' => "grid.user.moreDetails",'lessDetailsText' => "grid.user.lessDetails",'extraContent' => $this->_tpl_vars['extraContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<?php endif; ?>