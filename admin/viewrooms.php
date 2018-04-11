<?PHP
include('header.php');
$roomdata = selectalldataby("rooms");
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <h3>Room Details</h3>
    <?php
    if (!empty($_SESSION['error'])) {
        echo $_SESSION['error'];
    }
    ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Hotel City</th>
                <th>Room No</th>
                <th>Room Image</th>
                <th>Room Type</th>
                <th>Capacity</th>
                <th>Rent</th>
                <th>Facility</th>
                <th>Booking Status</th>
                <th>Room Status</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($roomdata as $col => $row){
                $hotel = $row['hotel_id'];
                $room_city = selectalldatabyid("hotels","hotel_id",$hotel);
                ?>
                <tr>
                    <td><?php echo $room_city['city']; ?></td>
                    <td><?php echo $row['room_no']; ?></td>                    
                    <td><img src="assets/img/<?php echo $row['image']; ?>" width="150" height="90"/></td>
                    <td><?php echo $row['room_type']; ?></td>
                    <td><?php echo $row['capacity']; ?></td>
                    <td><?php echo $row['rent']; ?></td>
                    <td><?php echo $row['facility']; ?></td>
                    <td><?php echo $row['booking_status']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <form action="validate.php" method="post">
                            <input type="hidden" name="database" value="rooms">
                            <input type="hidden" name="room_id" value="<?php echo $row['room_id']; ?>">
                            <input type="submit" class="btn btn-success" value="Update" name="updaterooms">
                        </form>
                    </td>
                    <td>
                        <form action="validate.php" method="post">
                            <input type="hidden" name="database" value="rooms">
                            <input type="hidden" name="room_id" value="<?php echo $row['room_id']; ?>">
                            <input type="submit" value="Delete" name="deleteroom" class="btn btn-success">
                        </form>
                    </td>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<?php
unset($_SESSION['error']);
unset($_SESSION['action']);
?>
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
