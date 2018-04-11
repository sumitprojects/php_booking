<?PHP
include('header.php');
$hoteldata = selectalldataby("hotels");

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
<div id="page-wrapper">
    <h3>Hotel Details</h3>
    <?php
    if (!empty($_SESSION['error'])) {
        echo $_SESSION['error'];
    }
    ?> <label>Search</label>
    <input id="search" type="text" class="form-control" name="field">
    <br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Hotel Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Image</th>
                <th>Total Rooms</th>
                <th>Available Rooms</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($hoteldata as $col => $row){
                $total_room = findtotalrooms("rooms",$row['hotel_id']);
                $avail_room = findavilrooms("rooms",$row['hotel_id']);
                ?>
                <tr>
                    
                    <td><?php echo $row['hotel_name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><img src="assets/img/<?php echo $row['hotel_image']; ?>" width="150" height="90"/></td>
                    <td><?php echo $total_room['totalroom']; ?></td>
                    <td><?php echo $avail_room['availroom']; ?></td>
                    <td><?php echo $row['hotel_status']; ?></td>
                    <td>
                        <form action="validate.php" method="post">
                            <input type="hidden" name="database" value="hotels">
                            <input type="hidden" name="hotel_id" value="<?php echo $row['hotel_id']; ?>">
                            <input type="submit" class="btn btn-success" value="Update" name="updatehotels">
                        </form>
                    </td>
                    <td>
                        <form action="validate.php" method="post">
                            <input type="hidden" name="database" value="hotels">
                            <input type="hidden" name="hotel_id" value="<?php echo $row['hotel_id']; ?>">
                            <input type="submit" value="Delete" name="deletehotels" class="btn btn-success">
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
