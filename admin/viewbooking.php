<?PHP
include('header.php');
$booking_data = selectalldataby("booking");
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
    <h3>Employee Details</h3>
    <table class="table table-striped table-bordered table-hover" id="datatable">
        <thead>
        <tr>
            <th>Booking ID</th>
            <th>Username</th>
            <th>GuestName</th>
            <th>Room No</th>
            <th>Room Type</th>
            <th>CheckIN</th>
            <th>CheckOut</th>
            <th>Adult</th>
            <th>Children</th>
            <th>Price</th>
<!--            <th>Update</th>-->
        </tr>
        </thead>
        <tbody>
        <?php foreach ($booking_data as $col => $row) {
            $user_data = selectalldatabyid("registration","reg_id",$row['reg_id']);?>
            <tr>
                <td><?php echo $row['booking_id']; ?></td>
                <td><?php echo $user_data['fname'] . " " . $user_data['lname'];?></td>
                <td><?php echo $row['guest_name']; ?></td>
                <td><?php echo $row['room_no'];?></td>
                <td><?php if(isset($row['room_no'])) {
                    $room_data = selectalldatabyid("rooms","room_no","'".$row['room_no']."'");
                    echo $room_data['room_type'];} ?></td>
                <td><?php echo $row['check_in']; ?></td>
                <td><?php echo $row['check_out']; ?></td>
                <td><?php echo $row['adult']; ?></td>
                <td><?php echo $row['children']; ?></td>
                <td>$<?php echo $row['total_amount']; ?></td>
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
