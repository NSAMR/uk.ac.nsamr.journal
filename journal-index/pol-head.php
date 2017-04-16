<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="left-title-bar">
                    <h2>Policies and Guidelines</h2>
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
                <li>Policies</li>
            </ol>
        </div>
    </div>
</div><!-- End breadcrumbs-->
<div class="space40"></div>
<div class="space40"></div> 

<div class="container policies">


    <div class="row">

        <!--TABS-->

        <div class="tabs col-sm-12">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#pol-general" role="tab" data-toggle="tab">Author Standards</a></li>
                <li><a href="#peer-review" role="tab" data-toggle="tab"> Reviewer Standards</a></li>
                
            </ul>


            <div class="tab-content">
                <div class="space40"></div> 

                <div class="tab-pane active" id="pol-general">
                    <?php include 'pol-general.php';?>

                </div>
                <div class="tab-pane" id="peer-review">
                    <?php include 'peerreviewpolicy.php';?>


                </div>
            </div><!--END TABS-->
        </div><!--END ROW-->

        <div class="space40"></div> 
    </div><!--END MAIN BODY CONTAINER-->
</div>

<div class="space40"></div> 

<!---PAGE FOOTER AND SCRIPTS-->
<div class="col-sm-12">
    <?php include('footer.php'); ?>
</div>