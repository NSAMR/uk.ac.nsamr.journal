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

		{include file="frontend/pages/gettingStarted-meat.tpl"}

	<div class="space40"></div>

    <!--Call to action -->
    {include file="frontend/components/cta_readytosubmit.tpl"}

    <!--Call to action -->
    {include file="frontend/components/cta_mailingList.tpl"}

    <!--Standard footer -->
	{include file="frontend/components/footer.tpl"}
