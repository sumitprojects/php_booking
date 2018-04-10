<?PHP
include('header.php');
if (!empty($_SESSION['hotel_id']) && $_SESSION['action'] == "update"){
    $data = selectalldatabyid("hotels","hotel_id",$_SESSION['hotel_id']);
}else{
    $data = null;
    unset($_SESSION['hotel_id']);
    unset($_SESSION['error']);
    unset($_SESSION['action']);
}?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <h3>Add Your New Hotel Here</h3>

        <?php
        if (!empty($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        ?>
    <form method="POST" role="form" id="form" action="validate.php" enctype="multipart/form-data">
       <input type="hidden" class="form-control" name="hotel_id" value="<?=$data['hotel_id']?>">
        <div class="row">
            <label></i>Hotel Name:</label>
            <input id="hotel_name" type="text" class="form-control" name="hotel_name" value="Rosewood International" readonly>
        </div>
        <br>
        <div class="row">
            <label>Address:</label>
            <textarea id="address" type="text" class="form-control" name="address"><?=$data['address']?></textarea>
        </div>
        <br>
        <div class="row">
            <label>City:</label>
            <select class="form-control" name="city">
                <option value="Los Angeles">Los Angeles</option>
                <option value="San Francisco">San Francisco</option>
                <option value="Santa Diego">Santa Diego</option>
                <option value="Modesto">Modesto</option>
                <option value="Beverly Hills">Beverly Hills</option>
            </select>
        </div>
        <br>
        <div class="row">
            <label>State:</label>
            <input type="text" class="form-control" id="state" name="state" value="California" readonly>
        </div>
        <br>
        <div class="row">
            <label>Country:</label>
           <input type="text" class="form-control" id="state" name="country" value="United States" readonly>
        </div>
        <br>
        <div class="row">
            <label>Hotel Image:</label>
            <input id="hotel_image" type="file" class="form-control" name="hotel_image"/>
        </div>
        <br>
<!--        <div class="row">-->
<!--            <label></i>Total Rooms:</label>-->
<!--            <input id="total_rooms" type="text" class="form-control" name="total_rooms">-->
<!--        </div>-->
<!--        </br>-->
<!--        <div class="row">-->
<!--            <label></i>Available Rooms:</label>-->
<!--            <input id="available_rooms" type="text" class="form-control" name="available_rooms">-->
<!--        </div>-->
<!--        </br>-->
        <div class="row">
            <label>Hotel Status:</label>
            <select class="form-control" id="hotel_status" name="hotel_status">
                <option value="Enable">Enable</option>
                <option value="Unable">Unable</option>
            </select>
        </div>
        <br>        
        <div class="row">
            <input type="submit" class="btn btn-success" name="addhotel" value="Submit">
            <button type="button" class="btn btn-danger">Cancel</button>
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
    unset($_SESSION['hotel_id']);
    unset($_SESSION['error']);
    unset($_SESSION['action']);

?>
</body>
</html>
