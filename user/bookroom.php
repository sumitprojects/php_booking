<?php
include 'header.php';
include ("dbconnection.php");
include 'function.php';
$room_type_data = selectdistictrow('rooms','room_type');

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
                      <form class="form-horizontal" role="form" method="POST" action="validate.php">
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
                      <select class="form-control" id="type" name="room_type">
                        <?php foreach ($room_type_data as $col => $row) :?>
                        		<option value="<?=$row['room_type']?>"><?=$row['room_type']?></option>
                        <?php  endforeach;?>
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
                    <input class="btn btn-primary" name="book" type="submit" value="submit" style="float: right;margin-right: 20px;">
                    
                  </div>
                </div>
                    </form>
                </div>
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>