{**
 * templates/frontend/pages/userRegister.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User registration form.
 *
 * @uses $primaryLocale string The primary locale for this journal/press
 *}
{include file="frontend/components/header.tpl" pageTitle="user.register"}

<div class="page page_register">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.register"}

	<form class="cmp_form register" id="register" method="post" action="{url op="registerUser"}">
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

			{* Allow the user to sign up as a reviewer *}
			{assign var=userCanRegisterReviewer value=0}
			{foreach from=$reviewerUserGroups[$contextId] item=userGroup}
				{if $userGroup->getPermitSelfRegistration()}
					{assign var=userCanRegisterReviewer value=$userCanRegisterReviewer+1}
				{/if}
			{/foreach}
		{/if}

		{include file="frontend/components/registrationFormContexts.tpl"}

		{* When a user is registering for no specific journal, allow them to
		   enter their reviewer interests *}
		{if !$currentContext}
			<fieldset class="reviewer_nocontext_interests">
				<legend>
					{translate key="user.register.noContextReviewerInterests"}
				</legend>
				<div class="fields">
					<div class="reviewer_nocontext_interests">
						{* See comment for .tag-it above *}
						<ul class="interests tag-it" data-field-name="interests[]" data-autocomplete-url="{url|escape router=$smarty.const.ROUTE_PAGE page='user' op='getInterests'}">
							{foreach from=$interests item=interest}
								<li>{$interest|escape}</li>
							{/foreach}
						</ul>
					</div>
				</div>
			</fieldset>
		{/if}

		{* recaptcha spam blocker *}
		{if $reCaptchaHtml}
			<fieldset class="recaptcha_wrapper">
				<div class="fields">
					<div class="recaptcha">
						{$reCaptchaHtml}
					</div>
				</div>
			</fieldset>
		{/if}

		<div class="buttons">
			<button class="submit" type="submit">
				{translate key="user.register"}
			</button>

			{url|assign:"rolesProfileUrl" page="user" op="profile" path="roles"}
			<a href="{url page="login" source=$rolesProfileUrl}" class="login">{translate key="user.login"}</a>
		</div>
	</form>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
