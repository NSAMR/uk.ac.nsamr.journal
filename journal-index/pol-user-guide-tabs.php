<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>User Guides</h2>
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
                <li>User Guides</li>
            </ol>
        </div>
    </div>
</div><!-- End breadcrumbs-->
<div class="space40"></div>
<div class="space40"></div> 

<div class="container policies">


    <div class="row">

        <!--TABS-->


        <div class="tabs col-sm-9">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#author-guide" role="tab" data-toggle="tab">Author</a></li>
                <li><a href="#reviewer-guide" role="tab" data-toggle="tab"> Reviewer</a></li>
                <li><a href="#section-editor-guide" role="tab" data-toggle="tab">Section Editor</a></li>
            </ul>


            <div class="tab-content">
                <div class="space40"></div> 

                <div class="tab-pane active" id="author-guide">
                    <?php include 'authorguide.php';?>

                </div>
                <div class="tab-pane" id="reviewer-guide">
                    <?php include 'reviewerguide.php';?>


                </div>
                <div class="tab-pane" id="section-editor-guide">
                    <?php include 'sectioneditoruserguide.php';?>
                </div>


            </div>
        </div><!--END TABS-->
    </div><!--END ROW-->


    <div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->

<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>