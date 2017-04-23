{**
  * templates/frontend/components/userButton.tpl
  *
  * Copyright (c) 2016-2017 Student Association of Medical Research
  * Copyright (c) 2016-2017 Helen M Jackson
  * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
  *
  * Social navigation menu list for JSAMR
  *}

<!--USER BUTTON-->
<ul id="navigationUser" class="nav nav-reginald nav-pills tab-list pull-right" role="navigation" aria-label="{translate|escape key="common.navigation.user"}">
	{if $isUserLoggedIn}
	<li>
		<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
			{$loggedInUsername|escape}
			<span class="badge">
				{$unreadNotificationCount}
			</span>
		</a>
		<ul class="dropdown-menu dropdown-menu-right">
			{if array_intersect(array(ROLE_ID_MANAGER, ROLE_ID_ASSISTANT, ROLE_ID_REVIEWER, ROLE_ID_AUTHOR), $userRoles)}
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
					{translate key="navigation.dashboard"}
					<span class="badge">
						{$unreadNotificationCount}
					</span>
				</a>
			</li>
			{/if}
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">
					{translate key="common.viewProfile"}
				</a>
			</li>
			{if array_intersect(array(ROLE_ID_SITE_ADMIN), $userRoles)}
			<li>
				<a href="{if $multipleContexts}{url router=$smarty.const.ROUTE_PAGE context="index" page="admin" op="index"}{else}{url router=$smarty.const.ROUTE_PAGE page="admin" op="index"}{/if}">
					{translate key="navigation.admin"}
				</a>
			</li>
			{/if}
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOut"}">
					{translate key="user.logOut"}
				</a>
			</li>
			{if $isUserLoggedInAs}
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="login" op="signOutAsUser"}">
					{translate key="user.logOutAs"} {$loggedInUsername|escape}
				</a>
			</li>
			{/if}
		</ul>
	</li>
	{else}
	{if !$hideRegisterLink}
	<li><span><a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="register"}" class="btn btn-topbar btn-lg btn-action">{translate key="navigation.register"} <i class="fa fa-user"></i></a></span></li>
	{/if}
	<li><span><a href="{url router=$smarty.const.ROUTE_PAGE page="login"}"  class="btn btn-topbar btn-lg btn-action">{translate key="navigation.login"} <i class="fa fa-user"></i></span></a></li>
	{/if}
</ul><!--END USER BUTTON-->