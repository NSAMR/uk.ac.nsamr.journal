{**
 * templates/frontend/pages/userLogin.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{include file="frontend/components/header-fullwidth.tpl" pageTitle="user.login"}

<div id="main-content" class="page page_login">

	<!--call to action-->
    <div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left-title-bar">
                        <h2>Login</h2>
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
					<li>Login</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->

    <div class="space40"></div>

	<div class="pkp_structure_content container">	

		{* A login message may be displayed if the user was redireceted to the
		   login page from another request. Examples include if login is required
		   before dowloading a file. *}
		{if $loginMessage}
			<div class="alert alert-info" role="alert">
				{translate key=$loginMessage}
			</div>
		{/if}

		<div class="col-lg-8 col-md-8 col-xs-8">
			<form class="pkp_form login" id="login" method="post" action="{$loginUrl}">
				{csrf}
				<input type="hidden" name="source" value="{$source|strip_unsafe_html|escape}" />

				{if $error}
					<div class="alert alert-danger" role="alert">
						{translate key=$error reason=$reason}
					</div>
				{/if}

				<div class="form-group">
					<label for="login-username">
						<legend>
							{translate key="user.username"}
						</legend>
					</label>
					<input type="text" name="username" class="form-control" id="login-username" placeholder="{translate key='user.username'}" value="{$username|escape}" maxlenght="32" required>
				</div>
				<div class="space20"></div>

				<div class="form-group">
					<label for="login-password">
						<legend>
							{translate key="user.password"}
						</legend>
					</label>
					<input type="password" name="password" class="form-control" id="login-password" placeholder="{translate key='user.password'}" password="true" maxlength="32" required="$passwordRequired">
				</div>

				<div class="form-group">
					<a href="{url page="login" op="lostPassword"}">
						{translate key="user.login.forgotPassword"}
					</a>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember" id="remember" value="1" checked="$remember"> {translate key="user.login.rememberUsernameAndPassword"}
					</label>
				</div>

				<div class="buttons">
					<div class="container">
						<div class="col-sm-2 col-sm-offset-3">
							<button class="btn btn-lg btn-action" href="{url router=$smarty.const.ROUTE_PAGE page="login"}">{translate key="user.login"} <i class="fa fa-user"></i></button>
						</div>
					</div>

					{if !$disableUserReg}
						{url|assign:registerUrl page="user" op="register" source=$source}
						<div class="container-fluid pull-right">
							<label>Need an account?</label>
							<a class="btn btn-lg btn-action-secondary" href="{$registerUrl}">Register <i class="fa fa-chevron-right"></i></a>
						</div>
					{/if}
				</div>
			</form>
			<div class="space80"></div>
		</div>
	</div><!--PKP container-->
</div><!-- .page -->
{include file="common/frontend/footer.tpl"}
