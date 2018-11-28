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
                            <h2>About JSAMR</h2>
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
                        <li>About</li>
                    </ol>
                </div>
            </div>
        </div><!-- End breadcrumbs-->
        <div class="space40"></div>
        

        <!-- Start about section -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-title-bar">
                        <h2>A little about us</h2>
                    </div>
                    <div class="space20"></div>
                    <p>JSAMR is the Journal of the Student Association of Medical Research, a division of <a href="http://www.nsamr.org">NSAMR</a>, the National Student Asssociation of Medical Research. JSAMR is a <b>high quality</b>, <b>open access</b>, <b>online only</b> journal that is authored, reviewed, and edited by <b>medical students</b>.</p>
                    <p>The aim of JSAMR is to <b>educate</b> students about all parts of the journal publication process, and to provide a <b>free</b> platform to give students <b>experience</b> of the journal submission and peer-review process <b>without competition</b> from established researchers.</p>
                    <p><a href="http://www.nsamr.org">NSAMR</a>, the parent organisation of JSAMR, is proudly funded by the Wellcome Trust, and is registered with the Charity Commission with registration number <a href="http://apps.charitycommission.gov.uk/Showcharity/RegisterOfCharities/CharityFramework.aspx?RegisteredCharityNumber=1169158&SubsidiaryNumber=0">1169158</a>.</p>
                </div>
                <div class="col-md-6">
                    <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/blocks/manuscript-729617_1920.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div><!-- End container of top things -->
        <div class="space40"></div> 

        <div class="light-box">
            <div class="container"><!--Container with icons and reasons-->
                <div class="row">
                    <div class="left-title-bar">
                        <h2>Our Philosophy</h2>
                    </div>
                </div>
                <div class="space40"></div> 

                <div clas="row">
                    <!-- Left hand section -->  
                    <div class="col-md-8">
                        <!-- Start light-box -->
                        <div class="clearfix">

                            <!-- Start icon-box -->
                            <div class="icon-box clearfix">

                                <i class="fa fa-cc fill-color-1"></i>
                                <div class="content">
                                    <h4>We promote Open Research</h4>
                                    <p>
                                        Open Research doesn't just mean Open Access. We encourage publication of all data and analytical tools used in each manuscript, allowing these, as well as figures, to be cited individually in future work.
                                    </p>
                                    <p>
                                        Everything we publish is licenced under Creative Commons <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY Attribution 4.0</a>, allowing sharing, transforming and building upon our content, so long as credit is attributed.
                                    </p>
                                </div>
                            </div>
                            <div class="space20"></div>   

                            <!-- Start icon-box -->
                            <div class="icon-box clearfix">
                                <i class="fa fa-circle-o fill-color-2"></i>
                                <div class="content">
                                    <h4>We believe in transparency</h4>
                                    <p>
                                        We will publish all conversations between authors and reviewers, alongside all revisions of each manuscript. 
                                    </p>
                                    <p>
                                        While our review process is double-blind, we encourage reviewers to reveal their identities after publication of the manuscript. Not only can reviewers then claim credit for their work, but any potential conflicts of interest will then be subject to public scrutiny.
                                    </p>
                                </div>
                            </div>
                            <div class="space20"></div>

                            <!-- Start icon-box -->
                            <div class="icon-box clearfix">
                                <i class="fa fa-users fill-color-3"></i>
                                <div class="content">
                                    <h4>We encourage wider access</h4>
                                    <p>
                                        It is important that the wider public have access to academic research, and also that medical students have more opportunities to participate in research during their training. Improving access will drive up standards, benefitting all.
                                    </p>
                                </div>
                            </div>
                            <div class="space20"></div>                         
                        </div><!-- End light-box -->
                    </div><!-- End left-hand section -->

                    <!-- Right-hand section -->
                    <div class="col-md-4">
                        <h4 style="font-weight:bold; text-transform:uppercase">Reasons to publish with us</h4>
                        <ul class="list-unstyled highlight-list">
                            <li><i class="fa fa-check icon-with-space"></i>The first Open Access academic journal in the UK which actively promotes research by medical students</li>
                            <li><i class="fa fa-check icon-with-space"></i>No publication fees. Ever.</li>
                            <li><i class="fa fa-check icon-with-space"></i>Submission-to-publication time of three weeks (depending on number of review rounds)</li>
                            <li><i class="fa fa-check icon-with-space"></i>Wide range of manuscript types and disciplines</li>
                            <li><i class="fa fa-check icon-with-space"></i>Transparent peer-review process with publication of all correspondence and manuscript versions</li>
                            <li><i class="fa fa-check icon-with-space"></i>Robust and user-friendly submission portal</li>
                            <li><i class="fa fa-check icon-with-space"></i>Excellent Open credentials</li>
                        </ul>
                    </div><!-- End right-hand section -->    
                </div><!-- end row-->
                <div class="space40"></div> 
            </div><!-- End container of icons and reasons -->
        </div>


        <!--Call to action -->
        {include file="frontend/components/cta_readytosubmit.tpl"}
        

        <!-- Start of team section -->
        <div class="space40"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-title-bar">
                        <h2>Core team members</h2>
                        <div class="space20"></div>
                        <p>JSAMR was founded in 2017, and the core team is supported by the wider SAMR committee, and teams of section editors and reviewers.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="team-wrap">
                    <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/matt-byrne.jpg" class="img-responsive">
                    <h4>Matthew Byrne</h4>
                    <span>Founder<br>Co-founding Editor-in-Chief<br>Newcastle University</span>
                    <p>
                        Matthew has an interest in transplant surgery and medical journalism. He has completed a master of research in transplantation in which he identified a pathophysiological mechanism for urinary tract infection after pancreas transplantation. Matthew aims to complete a PhD in the future and to pursue a career as a transplant surgeon.
                    </p>
                  <!-- <ul class="list-inline">
                    <li>
                        <a href="#" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li><-->
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->

        <div class="col-md-3 col-xs-6">
            <div class="team-wrap">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/steph-rees.jpg" class="img-responsive">
                <h4>Stephanie Rees</h4>
                <span>Co-founding Editor-in-Chief<br>University of Leicester</span>
                <p>
                    Stephanie has a keen interest in Cardiothoracic Surgery and research, and hopes to combine the two throughout her training. She is currently undertaking an intercalated BSc in Cardiovascular research, looking into the effect of hyperglycaemia on vascular tone, and hopes to further her knowledge and skills by undertaking a PhD.
                </p>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/steph.l.rees" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/stephanie-rees-308a24130/" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col--> 

        <div class="col-md-3 col-xs-6">
            <div class="team-wrap">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/helen-jackson.jpg" class="img-responsive">
                <h4>Helen Jackson</h4>
                <span>Founding CTO<br>King's College London</span>
                <p>
                    Helen is a programmer and grad-entry medic, having finished her BA in Natural Sciences and PhD in auditory signal processing at the University of Cambridge. She holds a Pathfinder Fellowship from the RCPsych to support her research into neuropsychiatry, and also works in healthcare tech, being one of the organisers of <a href="http://www.nhshackday.com">NHS Hack Day</a>. She likes Open, good science and common sense. 
                </p>
                <ul class="list-inline">
                    <li>
                        <a href="http://www.facebook.com/helenmaryjackson" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/DeckOfPandas" class="social-icon-sm si-border si-twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/helenmaryjackson/" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.helenjackson.co.uk/" class="social-icon-sm si-border si-home">
                            <i class="fa fa-home"></i>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/DeckOfPandas" class="social-icon-sm si-border si-github">
                            <i class="fa fa-github"></i>
                            <i class="fa fa-github"></i>
                        </a>
                    </li>                         
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->
 
        <div class="col-md-3 col-xs-6">
            <div class="team-wrap">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/akanksha-sinha.jpg" class="img-responsive">
                <h4>Akanksha Sinha</h4>
                <span>Founding Deputy Editor<br>University of Sheffield</span>
                <p>
                    Akanksha hopes to explore the field of internal medicine, with a special interest in clinical neurology. Aiming for a career as a clinician-scientist, she wants to continue clinical practice and sustain her academic interests while being involved in medical education. Currently, she is the student-lead and representative of academic medicine in Sheffield.
                </p>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.linkedin.com/in/akanksha-sinha-86774272/" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->
    </div><!-- End team container-->

    <div class="space40"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-xs-6">
                <div class="team-wrap">
                    <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/ciaran-grafton.jpg" class="img-responsive">
                    <h4>Ciaran Grafton-Clarke</h4>
                    <span>Founding Deputy Editor<br>University of Liverpool</span>
                    <p>
                        Ciaran wishes to pursue a career in emergency medicine with a particular interest in medical education. Ciaran founded an award-winning widening participation organisation within his own university and has provided support and guidance to the developers of the BMAT. Ciaran also sits on the Institute of Medical Ethics student council with the aim of improving the provision of undergraduate curricula relating to ethics and professionalism.
                    </p>
                    <!--<ul class="list-inline">
                    <li>
                        <a href="#" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-home">
                            <i class="fa fa-home"></i>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-github">
                            <i class="fa fa-github"></i>
                            <i class="fa fa-github"></i>
                        </a>
                    </li><-->                           
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->
        <div class="col-md-3 col-xs-6">
            <div class="team-wrap">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/godwin-tong.jpg" class="img-responsive">
                <h4>Godwin Tong</h4>
                <span>Founding Deputy Editor<br>University of Birmingham</span>
                <p>
                    Godwin graduated from the University of Glasgow with a BSc in Anatomy and an interest in microglia. He believes that sexual dimorphisms in the brain have an association with the predilection of males to certain neuropsychological disorders. As an aspiring clinician scientist, Godwin hopes to expedite the bench-to-bedside process in the future.
                </p>
                   <!--<ul class="list-inline">
                    <li>
                        <a href="#" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li><-->
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->
        <div class="col-md-3 col-xs-6">
            <div class="team-wrap">
                <img src="{$baseUrl}/plugins/themes/nsamr/templates/images/team/hamilton-morrin.jpg" class="img-responsive">
                <h4>Hamilton Morrin</h4>
                <span>Founding Technology Specialist<br>King's College London</span>
                <p>
                    Hamilton possesses an interest in the fields of neurology, psychiatry and digital health. He has completed an intercalated BSc in Medical Genetics and is currently involved in research into the genetic architecture of Lewy body dementia, with the intention of pursuing a PhD down the line.
                </p>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/hamilton.morrin?ref=br_rs" class="social-icon-sm si-border si-facebook">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://uk.linkedin.com/in/hamilton-morrin-08b996125" class="social-icon-sm si-border si-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul><!--social-->
            </div><!--team-wrap-->
        </div><!--team col-->   
    </div><!-- End team container-->
</div>
</div>
<div class="space80"></div>

{include file="frontend/components/ctaMailingList.tpl"}



</div><!-- .page -->

<!---STANDARD FOOTER-->
{include file="frontend/components/footer.tpl"}
