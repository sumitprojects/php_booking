<?php
include('header.php');
$reg_data = selectalldataby("registration");
$feedbackdata_data = selectalldataby("feedback");
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">DASHBOARD</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
		<div class="col-md-4">
                <div class="main-box mb-dull">
                    <a href="#">
                        <i></i>
						
                        <h5>Hotels</h5>
                        <?php echo counttablerows("hotels");

                        ?>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-dull">
                    <a href="#">
                        <i></i>
                        <h5>Registered Users</h5>
                        <?php echo counttablerows("registration");

                        ?>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-pink">
                    <a href="#">
                        <i></i>
                        <h5>Feedback</h5>
                        <?php echo counttablerows("feedback"); ?>
                    </a>
                </div>
            </div>

        </div>

        <!-- /. ROW  -->

        <!--
                <div class="row">
                    <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                   <iframe class="embed-responsive-item" src="assets/video/one.mp4"></iframe>
                </div>
            </div>
    -->
        </div>
        <!--/.Row-->
        <hr/>

        <div class="row">
            <div class="col-md-8">

                <div class="table-responsive">
                    <h1>Feedback</h1>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Contact No.</th>
                        </tr>
                        </thead>
                        <tbody><?php

                        foreach ($feedbackdata_data as $feedback_col => $feedback_val) {
                            ?>
                            <tr>
                                <td><?php echo $feedback_val['name']; ?></td>
                                <td><?php echo $feedback_val['email']; ?></td>
                                <td><?php echo $feedback_val['subject']; ?></td>
                                <td><?php echo $feedback_val['message']; ?></td>
                                <td><?php echo $feedback_val['contact_no']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
