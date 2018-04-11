<?PHP
include('header.php');
$reg_data = selectalldataby("registration");
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var searchTerm = $(this).val().toLowerCase();
            $('#datatable tbody tr').each(function(){
                var lineStr = $(this).text().toLowerCase();
                if(lineStr.indexOf(searchTerm) === -1){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        });
    });
</script>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" style="overflow-x: scroll">
    <label>Search</label>
    <input id="search" type="text" class="form-control" name="field">
    <br>
    <h3>Registered Users Details</h3>
    <table class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <tr>
            <th>Reg ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Booking Status</th>
            <!--            <th>Update</th>-->
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reg_data as $col => $row) {?>
            <tr>
                <td><?php echo $row['reg_id']; ?></td>
                <td><?php echo $row['fname'] . " " . $row['lname'];?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['maritial_status'];?></td>
                <td><?php echo $row['mobile_no']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php $booking_data = selectalldatabyid("booking","reg_id",$row['reg_id']);
                    if(is_array($booking_data)){
                        echo "Customer";
                    }else{
                        echo "Subscriber";
                    }
                     ?></td>
                <!--                <td>-->
                <!--                    <form action="validate.php" method="post">-->
                <!--                        <input type="hidden" name="database" value="booking">-->
                <!--                        <input type="hidden" name="booking_id" value="--><?php //echo $row['booking_id']; ?><!--">-->
                <!--                        <input type="submit" class="btn btn-success" value="Update" name="updateemp"-->
                <!--                               formaction="validate.php" formmethod="post">-->
                <!--                    </form>-->
                <!--                </td>-->
                <!--                <td>-->
                <!--                    <form action="validate.php" method="post">-->
                <!--                        <input type="hidden" name="database" value="booking">-->
                <!--                        <input type="hidden" name="booking_id" value="--><?php //echo $row['booking_id']; ?><!--">-->
                <!--                        <input type="submit" value="Delete" name="deleteemp" class="btn btn-success">-->
                <!--                    </form>-->
                <!--                </td>-->
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br>
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
