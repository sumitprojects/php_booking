<?PHP
include('header.php');
$emp_data = selectalldataby("employee");
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
            <th>Emp ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Maritial Status</th>
            <th>Mobile No.</th>
            <th>Designation.</th>
            <th>Salary</th>
            <th>Branch City</th>
            <th>Email</th>
            <th>User Name</th>
            <th>Join Date</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($emp_data as $col => $row) {
            ?>
            <tr>
                <td><?php echo $row['emp_id']; ?></td>
                <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['maritial_status']; ?></td>
                <td><?php echo $row['mobile_no']; ?></td>
                <td><?php echo $row['designation']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['branch_city']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['u_name']; ?></td>
                <td><?php echo $row['join_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <form action="validate.php" method="post">
                        <input type="hidden" name="database" value="employee">
                        <input type="hidden" name="emp_id" value="<?php echo $row['emp_id']; ?>">
                        <input type="submit" class="btn btn-success" value="Update" name="updateemp"
                               formaction="validate.php" formmethod="post">
                    </form>
                </td>
                <td>
                    <form action="validate.php" method="post">
                        <input type="hidden" name="database" value="employee">
                        <input type="hidden" name="emp_id" value="<?php echo $row['emp_id']; ?>">
                        <input type="submit" value="Delete" name="deleteemp" class="btn btn-success">
                    </form>
                </td>
            </tr>
            <?php
        } ?>
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
