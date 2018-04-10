<?PHP
include('header.php');

if (!empty($_SESSION['emp_id']) && $_SESSION['action'] == "update"){
    $data = selectalldatabyid("employee","emp_id",$_SESSION['emp_id']);
}else{
    $data = null;
    unset($_SESSION['emp_id']);
    unset($_SESSION['error']);
    unset($_SESSION['action']);
}

?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <h3>Registration</h3>
    <span><?php
        if (!empty($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        ?></span>
    <form method="POST" role="form" id="form" action="validate.php">
        <input type="hidden" class="form-control" name="emp_id" value="<?=$data['emp_id']?>">
        <div class="row">
            <label></i>First Name:</label>
            <input id="first_name" type="text" class="form-control" name="first_name" value="<?=$data['first_name']?>">
        </div>
        <div class="row">
            <label>Last Name:</label>
            <input id="last_name" type="text" class="form-control" name="last_name" value="<?=$data['last_name']?>">
        </div>
        <div class="row">
            <label>Address:</label>
            <textarea id="address" type="text" class="form-control" name="address"><?=$data['address']?></textarea>
        </div>
        <div class="row">
            <label>City:</label>
            <select class="form-control" id="city" name="city">
                <option value="<?=$data['city']?>" selected><?=$data['city']?></option>
                <option value="Aiea">Aiea</option>
                <option value="Bellevue">Bellevue</option>
                <option value="Bellingham">Bellingham</option>
                <option value="Buffalo">Buffalo</option>
                <option value="Cortland">Cortland</option>
                <option value="Destin">Destin</option>
                <option value="Key West">Key West</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Honolulu">Honolulu</option>
                <option value="Miami">Miami</option>
                <option value="Mililani">Mililani</option>
                <option value="Newyork City">New York City</option>
                <option value="Parkland">Parkland</option>
                <option value="Pearl City">Pearl City</option>
                <option value="San Diego">San Diego</option>
                <option value="San Francisco">San Francisco</option>
                <option value="Santa Barbara">Santa Barbara</option>
                <option value="Seattle">Seattle</option>
                <option value="Spokane">Spokane</option>
                <option value="Waipahu">Waipahu</option>
            </select>
            </select>
        </div>
        <div class="row">
            <label>State:</label>
            <select class="form-control" id="state" name="state">
                <option value="<?=$data['state']?>" selected><?=$data['state']?></option>
                <option value="Washington">Washington</option>
                <option value="California">California</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Newyork">Newyork</option>
                <option value="Florida">Florida</option>
            </select>
        </div>
        <div class="row">
            <label>Country:</label>
            <select class="form-control" id="country" name="country">
                <option value="<?=$data['country']?>" selected><?=$data['country']?></option>
                <option value="Australia">Australia</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="US">US</option>
            </select>
        </div>
        <div class="row">
            <label>DOB:</label>
            <input id="dob" type="date" class="form-control" name="dob" value="<?=$data['dob']?>"   >
        </div>
        <div class="row">
            <label>Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="Male" <?php if ($data['gender'] == "Male") echo "selected"?>>Male</option>
                <option value="Female" <?php if ($data['gender'] == "Female") echo "selected"?>>Female</option>
                <option value="Other" <?php if ($data['gender'] == "Other") echo "selected"?>>Other</option>
            </select>
        </div>
        <div class="row">
            <label>Maritial Status:</label>
            <select class="form-control" id="maritial_status" name="maritial_status">
                <option value="Married" <?php if ($data['maritial_status'] == "Married") echo "selected"?>>Married</option>
                <option value="Un Married" <?php if ($data['maritial_status'] == "Un Married") echo "selected"?>>Un Married</option>
            </select>
        </div>
        <div class="row">
            <label>Mobile No:</label>
            <input id="mobile_no" type="text" class="form-control" name="mobile_no" value="<?=$data['mobile_no']?>">
        </div>
         <div class="row">
            <label>Designation:</label>
            <input id="designation" type="text" class="form-control" name="designation" value="<?=$data['designation']?>">
        </div>
         <div class="row">
            <label>Salary:</label>
            <input id="salary" type="text" class="form-control" name="salary" value="<?=$data['salary']?>">
        </div>
         <div class="row">
            <label>Branch City:</label>
            <input id="branch_city" type="text" class="form-control" name="branch_city" value="<?=$data['branch_city']?>">
        </div>
        <div class="row">
            <label>Email:</label>
            <input id="email" type="text" class="form-control" name="email" value="<?=$data['email']?>">
        </div>
        <div class="row">
            <label>User name:</label>
            <input id="uname" type="text" class="form-control" name="u_name" value="<?=$data['u_name']?>">
        </div>
        <div class="row">
            <label>Password:</label>
            <input id="password" type="password" class="form-control" name="password" value="<?=$data['password']?>">
        </div>
        <div class="row">
            <label>Join Date:</label>
            <input id="join_date" type="date" class="form-control" name="join_date" value="<?=$data['join_date']?>">
        </div>
        <div class="row">
            <label>Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="Enable" <?php if ($data['status'] == "Enable") echo "selected"?>>Enable</option>
                <option value="Unable" <?php if ($data['status'] == "Disable") echo "selected"?>>Unable</option>
            </select>
        </div>
        </br>
        <div class="row">
            <input type="submit" class="btn btn-success" name="addemp" value="Submit">
        </div>
        <div class="clear"></div>
    </form>
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
<?php
unset($_SESSION['emp_id']);
unset($_SESSION['error']);
unset($_SESSION['action']);?>

</body>
</html>
