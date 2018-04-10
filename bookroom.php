<?php
include ("dbconnection.php");
?>
<?php
$msg='';
$errormsg='';
if(isset($_POST["save"]))
{
  
      include ("dbconnection.php");
      $guest_name = $_POST['guest_name'];
      $check_in = $_POST['check_in'];
      $check_out = $_POST['check_out'];
      $room_type = $_POST['type'];
      $adult = $_POST['adult'];
      $children = $_POST['children'];
      $t_room = $_POST['t_room'];
   
      $sql ="INSERT INTO booking(guest_name) values(' " . $guest_name . " ',' " . $check_in . " ',' " . $check_out . " ',' " . $type . " ',' " . $adult . " ',' " . $children . " ',' " . $t_room . " ')";

      if (mysqli_query($dbconnection, $sql)) 
                {
                   header("Location: payment.php");
                }
          else
                {
            $errormsg='<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Got some Error.</strong>
                </div>';
                }


}

$dbconnection->close();

include 'header.php';
?>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<?PHP
            include 'menu.php';
            ?>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			
			<div class="container_12">
						<h3>BOOK YOUR STAY HERE</h3>
						<div class="tab-pane active tab1">
                      <form class="form-horizontal" role="form" method="POST" action="payment.php">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Guest Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="guest_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Check In Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="check_out" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Check Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="check_in" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label  class="col-sm-2 control-label">Room Type</label>
                        <div class="col-sm-10">
                        	<select class="form-control" id="type" name="type">
                         		<option value="DELUXE GUEST ROOM">DELUXE GUEST ROOM</option>
    							<option value="SUPERIOR GUEST ROOM">SUPERIOR GUEST ROOM</option>
    							<option value="CLUB LEVEL GUEST ROOM">CLUB LEVEL GUEST ROOM</option>
    						</select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Adult</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="adult">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label   class="col-sm-2 control-label">Children</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="children">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">No Of Rooms</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="t_room">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                  <div class="col-lg-12">
                    <button class="btn btn-primary" name="save" style="float: right;margin-right: 20px;">SAVE</button>
                    
                  </div>
                </div>
                    </form>
                </div>
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>