{**
    Overwriting main template because I can't link to new static pages...
*}


    <!---STANDARD HEAD INFO AND NAV-->
    {include file="frontend/components/header-fullwidth.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}


    <!---BODY OF THIS PAGE-->
    <div class="page_index_site">

        <!--call to action-->
        <div style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="left-title-bar">
                            <h2>Submission Process</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end call to action-->

        <!-- Breadcrumbs -->
        <div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-E8EBEE-1920x1080.png') repeat; padding: 10px 0 10px 0;" class="col-sm-12 hidden-xs text-right">
            <div class="container">
                <div class="row pull-right">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Submission Process</li>
                    </ol>
                </div>
            </div>
        </div><!-- End breadcrumbs-->
        <div class="space40"></div>

        
        <!-- Start process section -->
        <div class="container process">
            <hr>
            <div class="divide40"></div>
            <!-- Start steps -->
            <div class="process-step"> <span class="process-border"></span>
                <div class="step">
                    <div class="icon-square"> <i class="fa fa-users"></i> </div>
                    <h5>Consider your audience</h5>
                    <p>Think about whether your work is suited to JSAMR. Read <a href="aboutjnsamr.php">about us</a>, and please do <a href="contact.php">ask us</a> if you're still not sure or if there's something you don't understand.</p>
                </div>
                <div class="step even">
                    <div class="icon-square"> <i class="fa fa-file-text"></i> </div>
                    <h5>Read our policy documents</h5>
                    <p>Our <a href="pol-head.php">author policies and guidelines</a> page describes what we need you to agree to, and also what we undertake to offer you.</p>
                </div>
                <div class="step">
                    <div class="icon-square"> <i class="fa fa-keyboard-o"></i> </div>
                    <h5>Typeset your document</h5>
                    <p>We have <a href="#">LaTeX</a> templates for each kind of submission we accept (other than posters). If your submission uses our LaTex template, and your work is accepted, then it may be published even faster. If this isn't possible for you, then we also accept submissions that use our Microsoft Word template. These templates can all be found in the <a href="pol-manuscript-guidance.php">style guidelines</a> section of our policy documents. <!--Details about what LaTeX is, how to use it, and why it is useful in academic publishing can be found on our <a href="#">FAQs</a> page.</p>-->
                </div>
                <div class="step even">
                    <div class="icon-square"> <i class="fa fa-list-alt"></i> </div>
                    <h5>Go through the submission checklist</h5>
                    <p>Using our <a href="checklist.php">submission checklist</a> will help you check that your manuscript adheres to our policies and guidelines, and will help avoid unecessary rejection or delay in the review process.</p>
                </div>
                <div class="step">
                    <div class="icon-square"> <i class="fa fa-paper-plane"></i> </div>
                    <h5>Complete the submission process</h5>
                    <p>Submitting to JSAMR requires you to register for an account with us, and you will be lead through this process when you <a href="/journal/journal-machinery/ojs-3.0.1/index.php/jnsamr/user/register">register</a>. You will only need to register for an account once, and having this account will enable you to track the progress of your submission, as well as communicate securely with your Editor and Reviewers within our system. To preserve the double-blind review process, and academic integrity within the principles of Open, we require all communications to go through our platform, and you will not be able to contact your Editor or Reviewers outside this.</p>
                </div>
            </div><!-- End steps -->
        </div>
        
        <div class="space80"></div>
        {include file="frontend/components/cta_readytosubmit.tpl"}

        {include file="frontend/components/cta_mailingList.tpl"}

</div><!-- .page -->

<!---STANDARD FOOTER-->
{include file="frontend/components/footer.tpl"}
