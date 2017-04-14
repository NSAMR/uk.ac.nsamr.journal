<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>Author policies and guidelines</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end call to action-->

<div class="space40"></div> 

<div class="container policies">
    <div class="row">
        <!--TABS-->
        <div class="tabs col-sm-9">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#authorpolicies" role="tab" data-toggle="tab">Author policies</a></li>
                <li><a href="#manuscriptpreparation" role="tab" data-toggle="tab">Manuscript preparation</a></li>
                <li><a href="#checklist" role="tab" data-toggle="tab">Submission checklist</a></li>
            </ul>

            <div class="tab-content">
                <div class="space40"></div> 
                <div class="tab-pane active" id="authorpolicies">
                    <?php include('authorpolicies2.php'); ?>
                </div>
                <div class="tab-pane" id="manuscriptpreparation">
                    <?php include('manuscriptpreparation.php'); ?>
                </div><div class="tab-pane" id="checklist">
                    <?php include('checklist.php'); ?>
                </div>
            </div>
      </div><!--END TABS-->
</div><!--END ROW-->
<div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->

<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>