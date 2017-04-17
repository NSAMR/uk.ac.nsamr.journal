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
                <li>Contact1</li>
            </ol>
        </div>
    </div>
</div><!-- End breadcrumbs-->
<div class="space40"></div>
<div class="space40"></div> <!-- TODO Why did I have to put in two of these...? -->

<div class="space40"></div> 
<div class="divide80"></div>
        <div class="container">
<form id="contact-form" method="post" action="contactform.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Name *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-lg btn-action" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

</form>
</div>


</div><!--END ROW-->
<div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->
<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>