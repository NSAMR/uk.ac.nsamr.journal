<!---STANDARD HEAD INFO AND NAV-->
{include file="frontend/components/header-fullwidth.tpl"}

<!---BODY OF THIS PAGE-->

<!--call to action-->
<div class="row" style="background: url('{$baseUrl}/plugins/themes/nsamr/templates/images/patterns/brick-wall-98A3AE-1920x1080.png') repeat; padding: 20px 0 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>INFORMATION FOR AUTHORS</h2>
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
                <li><a href="{$baseUrl}">Home</a></li>
                <li>Contribute</li>
                <li>Authors</li>
            </ol>
        </div>
    </div>
</div><!-- End breadcrumbs-->

<!-- Start process section -->
<div class="container process">
    <hr>
    <div class="divide40"></div>
    <div>Helloooo</div>
    <div class="divide40"></div>
    <!-- Start steps -->
    <div class="process-step"> <span class="process-border"></span>
        <div class="step">
            <div class="icon-square"> <i class="fa fa-users"></i> </div>
            <h5>Consider your audience</h5>
            <p>Think about whether your work is suited to JSAMR. Read <a href="{url router=$smarty.const.ROUTE_PAGE page='about'}">About</a> us and about what kinds of manuscripts we accept: our <a>FAQs</a> are worth a read too. Do <a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="contact"}">Contact</a> us if you're still not sure about whether to submit something.</p>
            <p>Our aim is to help you publish, and our editorial and reviewer teams can help you through the whole process if you need us to.</p>
        </div>
        <div class="step even">
            <div class="icon-square"> <i class="fa fa-file-text"></i> </div>
            <h5>Read our author policy documents</h5>
            <p>Our <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='policies'}">Author Policies</a> describe what we need you to agree to, and also what we undertake to offer you. These policies include our eligibility criteria, details about copyright, confidentiality requirements and more.</p>
        </div>
        <div class="step">
            <div class="icon-square"> <i class="fa fa-file-text"></i> </div>
            <h5>Read our manuscript preparation guidance</h5>
            <p>Our <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='xxx'}">Manuscript Preparation Guidelines</a> and <a>Style Guidelines</a> contain all the information you need to prepare your manuscript for submission. We detail what manuscript types we accept, and what the structure for each should be. Read these notes carefully: there are some parts that are relevant to all manuscript types, and others that are relevant to specific types.</p>
        </div>
        <div class="step even">
            <div class="icon-square"> <i class="fa fa-keyboard-o"></i> </div>
            <h5>Prepare your manuscript</h5>
            <p>Before you start any work, double check the structure and word count for the type of manuscript you are preparing in our <a>Manuscript Preparation Guidelines</a>. All manuscripts must also follow our <a>Style Guidelines</a>.</p>
            <p>We have a <a href="https://github.com/NSAMR/uk.ac.nsamr.journal/tree/master/latex-templates/article">LaTeX template for a standard article</a>, and soon we will also have templates for each manuscript type we accept (other than posters). If your manuscript uses one of our templates, and your work is accepted, then it may be published even faster because we won't have to do so much work to typset your submission.</p>
            <p>If using one of our templates isn't possible, or if we haven't made a LaTeX template for your manuscript type yet, then we also accept submissions as a pdf saved from any word processor, provided that the structure and styling is as per our notes linked above. <!--Details about what LaTeX is, how to use it, and why it is useful in academic publishing can be found on our <a href="#">FAQs</a> page.--></p>
        </div>
        <div class="step">
            <div class="icon-square"> <i class="fa fa-list-alt"></i> </div>
            <h5>Go through the submission checklist</h5>
            <p>Using our <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='guides'}">Submission Checklist</a> will help you check that your manuscript follows our <a>Manuscript Preparation Guidelines</a> and <a>Style Guidelines</a>, and will help avoid unecessary delay in the review process (or even outright rejection pending re-working).</p>
        </div>
        <div class="step even">
            <div class="icon-square"> <i class="fa fa-file-text"></i> </div>
            <h5>Sign up to our online submission system</h5>
            <p>JSAMR uses a comprehensive online system to manage submissions and publications, based on <a>Open Journal Systems</a>. Sign up <a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='xxx'}">here</a> or using the button at the top of the page.</p>
            <p>You will only need to register for an account once, and having this account will enable you to track the progress of your submission, as well as communicate securely with your Editor and Reviewers within our system. To preserve the double-blind review process, and academic integrity within the principles of Open, we require all communications to go through our platform, and you will not be able to contact your Editor or Reviewers outside this.</p>
        </div>
        <div class="step">
            <div class="icon-square"> <i class="fa fa-paper-plane"></i> </div>
            <h5>Go through the submission process</h5>
            <p>When you are signed in, go through the submission process step by step, clicking "Next" ***check this isn't a lie*** on each screen. There are plenty of instructions in the system, but you'll probably find our User Guide for Authors</a> helpful so you know what to type where. The process will collect all relevant information from you, and you will be able to upload all your documents.</p>
            <p>LIST OF THINGS TO UPLOAD AT SUBMISSION</p>
        </div>
         <div class="step even">
            <div class="icon-square"> <i class="fa fa-paper-plane"></i> </div>
            <h5>Wait to hear from us</h5>
            <p>When we receive your submission, we'll assign an Editor to you, who will manage the whole process right through from submission to acceptance and publication. You will receive an email notification when your Editor has been assigned.</p>
            <p>Your Editor will then invite at least appropriate Peer Reviewers to give feedback on your manuscript, and will collate their reponses, before contacting you with their decision. Editors' decisions can include Accept, Accept subject to minor revision, Accept subject to major revision, and Reject ***CHECK***. The Editor will explain their decision to you, and will share the feedback from the Reviewers.</p>
        </div>
        <div class="step">
            <div class="icon-square"> <i class="fa fa-paper-plane"></i> </div>
            <h5>Next steps</h5>
            <p>If your manuscript is accepted for publication, then congratulations! We will then contact you about how to proceed, but a rough outline is: upload your manuscript's cover sheet, and checking through and approving a typset version of your paper that we will make for you. Your original manuscript will appear online within 72 hours of being accepted, and the typeset version will be added when complete and approved. We will also publish the Reviewers' feedback and Editorial comments alongside your manuscript.</p>
            <p>If your Editor decides that you need to work on your manuscript further before we can accept it, then you can use their feedback and that from the Reviewers. We will be happy to help you as much as you need to re-work your submission. You can then upload your resubmission through the same part of the system as your original submission.</p>
            <p>If your Editor rejects your manuscript, then don't be disheartened. You can use the feedback from the Editorial process to improve your manuscript to submit to JSAMR as a new submission, or to submit elsewhere.</p>
        </div>
    </div><!-- End steps -->
</div><!--End process section -->

<div class="space80"></div>


<!--Call to action -->
{include file="frontend/components/cta_readyToSubmit.tpl"}

<!--Call to action -->
{include file="frontend/components/cta_mailingList.tpl"}

<!---STANDARD FOOTER-->
{include file="frontend/components/footer.tpl"}

