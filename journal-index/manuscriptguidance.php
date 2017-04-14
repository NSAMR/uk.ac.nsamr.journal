<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>Manuscript Guidance</h2>
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
                <li class="active"><a href="#articlepolicies" role="tab" data-toggle="tab">Article Policies</a></li>
                <li><a href="#peer review policy" role="tab" data-toggle="tab">Peer Review Policy</a></li>
                <li><a href="#POLICIES HYPERLINKED" role="tab" data-toggle="tab">Policies Hyperlinked</a></li>
                <li><a href="#style guidelines" role="tab" data-toggle="tab"Style Guidelines</a></li>
                <li><a href="#Submissions" role="tab" data-toggle="tab">Submissions</a></li>
            </ul>

            <div class="tab-content">
                <div class="space40"></div> 
                <div class="tab-pane active" id="articlepolicies">
                    <?php include('Article policies.php'); ?>
                </div>
                <div class="tab-pane" id="peer review policy">
                    <?php include('Peer Review Policy.php'); ?>
                </div><div class="tab-pane" id="POLICIES HYPERLINKED">
                    <?php include('POLICIES HYPERLINKED.php'); ?>
                </div></div><div class="tab-pane" id="style guidelines">
                    <?php include('Style Guidelines.php'); ?>
                </div></div><div class="tab-pane" id="Submissions">
                    <?php include('SUBMISSIONS.php'); ?>
                </div>
            </div>
      </div><!--END TABS-->
</div><!--END ROW-->
<div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->

<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>