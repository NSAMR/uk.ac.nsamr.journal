{**
 * templates/frontend/pages/userLostPassword.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Password reset form.
 *
 *}
{include file="frontend/components/header-fullwidth.tpl" pageTitle="user.login.resetPassword"}

<div id="main-content" class="page page_lost_password">

	<!--call to action-->
    <div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left-title-bar">
                        <h2>Forgot password</h2>
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
					<li>Forgot password</li>
				</ol>
			</div>
		</div>
	</div><!-- End breadcrumbs-->
 
	<div class="space40"></div>

	<div class="pkp_structure_content container">	
		<div class="alert alert-info" role="alert">
			{translate key="user.login.resetPasswordInstructions"}
		</div>

		<div class="col-lg-8 col-md-8 col-xs-8">

			<form class="pkp_form lost_password" id="lostPasswordForm" action="{url page="login" op="requestResetPassword"}" method="post">
				{csrf}

				{if $error}
					<div class="alert alert-error" role="alert">
						{translate key=$error}
					</div>
				{/if}

				<div class="form-group">
					<label for="login-email">
						{translate key="user.login.registeredEmail"}
					</label>
					<input type="email" name="email" class="form-control" id="login-email" placeholder="{translate key='user.login.registeredEmail'}" value="{$email|escape}" maxlenght="32" required>
				</div>

				<div class="buttons">
						<div class="container-fluid pull-left">
							<button class="btn btn-lg btn-action" type="submit">{translate key="user.login.resetPassword"} <i class="fa fa-refresh"></i></button>
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
