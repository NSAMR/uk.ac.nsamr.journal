<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="left-title-bar">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end call to action-->

<!-- Breadcrumbs -->
<div class="pattern-bg-light-supershort col-sm-12 hidden-xs text-right">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
</div><!-- End breadcrumbs-->
<div class="space40"></div>
<div class="space40"></div> <!-- TODO Why did I have to put in two of these...? -->

<div class="space40"></div> 

<div class="container policies">
    <div class="row">

        <!--CONTENT-->
        <div class="divide80"></div>
        <div class="container">
            <div id="map-canvas"></div>
        </div><!--.container-->
        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin30">
                    <p>
                        Please feel free to contact the JSAMR Editorial Team with any queries or issues that you may have regarding article submission, article review or the site in general.
                    </p>
                    <div class="divide30"></div>
                    <div class="form-contact">
                        <div class="required">
                            <p>( <span>*</span> fields are required )</p>
                        </div>

                       <form name="sentMessage" id="contactForm" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">
                                    <label>Twitter Handle<span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="Twitter Handle" id="twitter" required data-validation-required-message="Please enter your twitter handle.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-theme-bg btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>
             </div>
      </div><!--END CONTENT
  -->


</div><!--END ROW-->
<div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->
<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>