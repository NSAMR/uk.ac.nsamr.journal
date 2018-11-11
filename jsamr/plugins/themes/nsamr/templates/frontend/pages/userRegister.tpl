{**
* templates/frontend/pages/userRegister.tpl
*
* Copyright (c) 2014-2016 Simon Fraser University Library
* Copyright (c) 2003-2016 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* User registration form.
*}
{include file="frontend/components/header-fullwidth.tpl" pageTitle="user.register"}

<div id="main-content" class="page page_register">

	<!--call to action-->
    <div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left-title-bar">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end call to action-->

	<!-- Breadcrumbs -->
	<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brickwall_@2X.png') repeat; padding: 10px 0 10px 0;" class="col-sm-12 hidden-xs text-right">
		<div class="container">
			<div class="row pull-right">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Register</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->

	<div class="space40"></div>

<div class="pkp_structure_content container">	
	<form class="pkp_form register" id="register" method="post" action="{url op="registerUser"}">
		<div class="container-fluid">
			{csrf}

			{if $source}
				<input type="hidden" name="source" value="{$source|escape}" />
			{/if}

			{include file="common/formErrors.tpl"}

			{include file="frontend/components/registrationForm.tpl"}

			{* When a user is registering with a specific journal *}
			{if $currentContext}

				{* Users are opted into the Reader and Author roles in the current
				   journal/press by default. See RegistrationForm::initData() *}
				{assign var=contextId value=$currentContext->getId()}
				{foreach from=$readerUserGroups[$contextId] item=userGroup}
					{if in_array($userGroup->getId(), $userGroupIds)}
						{assign var="userGroupId" value=$userGroup->getId()}
						<input type="hidden" name="readerGroup[{$userGroupId}]" value="1">
					{/if}
				{/foreach}
				{foreach from=$authorUserGroups[$contextId] item=userGroup}
					{if in_array($userGroup->getId(), $userGroupIds)}
						{assign var="userGroupId" value=$userGroup->getId()}
						<input type="hidden" name="authorGroup[{$userGroupId}]" value="1">
					{/if}
				{/foreach}
			{/if}

			{include file="frontend/components/registrationFormContexts.tpl"}
		</div>

		<div class="container-fluid">
			<div class="col-xs-2 col-xs-offset-5">
				<button class="btn btn-lg btn-action" type="submit">{translate key="user.register"} <i class="fa fa-chevron-right"></i></button>
			</div>

			{url|assign:"rolesProfileUrl" page="user" op="profile" path="roles"}
		</div>
	</form>

	<div class="container-fluid pull-right">
		<label>Already have an account?</label>
		<a class="btn btn-lg btn-action-secondary" href="{url router=$smarty.const.ROUTE_PAGE page="login"}">{translate key="user.login"} <i class="fa fa-user"></i></a>
	</div>
	<div class="space80"></div>

	{include file="common/frontend/footer.tpl"}
