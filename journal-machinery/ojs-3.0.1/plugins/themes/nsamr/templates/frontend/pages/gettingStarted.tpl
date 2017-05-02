{**
 * templates/frontend/pages/userRegisterComplete.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief A landing page displayed to users upon successful registration
 *}
{include file="frontend/components/header-fullwidth.tpl"}



<!---BODY OF THIS PAGE-->
<div class="page_index_site">

    <!--call to action-->
    <div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left-title-bar">
                        <h2>Get started</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end call to action-->

	<div class="space40"></div>

    <!--Service boxes-->
        <div class="container ">
			<div class="row">
				<div class="col-md-4">
					<div class="service-box wow animated fadeIn" data-wow-delay="1s">
						<i class="fa fa-cogs color-1"></i>
						<h4><a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">View my dashboard >></a></h4>
						<div class="space30"></div>
					</div>
				</div><!--service column-->

				<div class="col-md-4">
					<div class="service-box wow animated fadeIn" data-wow-delay="1s">
						<i class="fa fa-user color-4"></i>
						<h4><a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">{translate key="user.editMyProfile"} >></a></h4>
						<div class="space30"></div>
					</div>
				</div><!--service column-->

				<div class="col-md-4">
					<div class="service-box wow animated fadeIn" data-wow-delay="1s">
						<i class="fa fa-book color-2"></i>
						<h4><a href="{url router=$smarty.const.ROUTE_PAGE page="user" op="profile"}">Get in touch >></a></h4>
						<div class="space30"></div>
					</div>
				</div><!--service column-->

			</div>
        </div>

	<div class="space40"></div>

    <!--Call to action -->
    {include file="frontend/components/cta_readytosubmit.tpl"}

    <!--Call to action -->
    {include file="frontend/components/cta_mailingList.tpl"}

    <!--Standard footer -->
	{include file="frontend/components/footer.tpl"}
