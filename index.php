<?php
include ("dbconnection.php");
if(isset($_POST["submit"]))
{
  
      include ("dbconnection.php");
      $conn = $dbconnection;
      $email = $_POST['email'];
      $sql ="INSERT INTO subscribe(email) values('$email')";

      if (mysqli_query($dbconnection, $sql)) 
                {
        $msg='<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>You Submitted Successfully</strong>
            </div>';   
           }        
           
          else
                {
            $errormsg='<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Got some Error.</strong>
                </div>';
                }
  
      
}

if(isset($_POST["save"]))
{
  
     
      include ("dbconnection.php");
      $conn = $dbconnection;
            $guest_name   = $_POST['guest_name'];
            $tdate   = $_POST['tdate'];
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];
            $adult = $_POST['adult'];
            $children = $_POST['children'];
            $t_room = $_POST['t_room'];
            $sqlinss = "INSERT INTO booking(guest_name,check_in,check_out,adult,children,t_room) values(' " . $guest_name . " ',' " . $check_in . " ',' " . $check_out . " '," . $adult . "," . $children . " ," . $t_room . ")";
          
      if (mysqli_query($dbconnection, $sqlinss)) 
                {
                	session_start();
                	$_SESSION['booking_id'] = mysqli_insert_id($dbconnection);
                 	header("Location: query.php");
       		    }        
           
          else
                {
            $errormsg='<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Got some Error.</strong>
                </div>';
                } 
}

include 'header.php';
?>

	<body class="page1" id="top" onload="date()">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<?php
							include 'menu.php';
						?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/one.jpg">
					<div class="caption fadeIn">
						<h2>ROSEWOOD INTERNATIONAL</h2>						
					</div>
				</div>
				<div data-src="images/two.jpg">
					<div class="caption fadeIn">
						<h2>ROSEWOOD INTERNATIONAL</h2>						
					</div>
				</div>
				<div data-src="images/three.jpg">
					<div class="caption fadeIn">
						<h2>ROSEWOOD INTERNATIONAL</h2>						
					</div>
				</div>
				<div data-src="images/four.jpg">
					<div class="caption fadeIn">
						<h2>ROSEWOOD INTERNATIONAL</h2>						
					</div>
				</div>
				<div data-src="images/five.jpg">
					<div class="caption fadeIn">
						<h2>ROSEWOOD INTERNATIONAL</h2>						
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_4">
						<div class="banner">
							<img src="images/E.jpg" alt="">
							<div class="label">
								<div class="title">DELUXE GUEST ROOM</div>
								<div class="price">from<span>$ 1.600</span></div>
								<a href="deluxe.php">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/F.png" alt="">
							<div class="label">
								<div class="title">SUPERIOR GUEST ROOM</div>
								<div class="price">from<span>$ 2000</span></div>
								<a href="sup.php">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/G.jpg" alt="">
							<div class="label">
								<div class="title">CLUB LEVEL GUEST ROOM</div>
								<div class="price">from<span>$ 1.500</span></div>
								<a href="guest.php">LEARN MORE</a>
							</div>
						</div>
					</div>
				<div class="clear"></div>
				
				<div class="grid_12">
					<h3>Welcome</h3>
					<div class="clear cl1"></div>
					<p>Here on our website you'll find extensive information not only about us but also about the abundance of Rosewood's year-round leisure activities</p>
					<p> We look forward to making your stay both comfortable and memorable by providing personalized service exceeding the quality of our amenities.</p>
					<p>I look forward to having you as our guest!</p>
					<p>Sincerely,</p>
					<p>Maitri Patel</p>
					<p>General Manager</p>
					<p>Rosewood International</p>	
			
				</div>

				<div class="grid_12">
					<h3>CHECK AVAILIBLITY</h3>
					<div class="clear cl1"></div>
					<form class="form-horizontal" role="form" method="POST">
						<div class="form-group">
                        <label for="check_in" class="col-sm-2 control-label">Guest Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="guest_name" class="form-control" id="guest_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="check_in" class="col-sm-2 control-label">Check In Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="check_in" class="form-control" id="check_in">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="check_out" class="col-sm-2 control-label">Check In Out</label>
                        <div class="col-sm-10">
                          <input type="date" name="check_out" class="form-control" id="check_out">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="adult" class="col-sm-2 control-label">Adult</label>
                        <div class="col-sm-10">
                          <select name="adult">
								<option value="1">1</option>	
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
						</select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="children" class="col-sm-2 control-label">Children</label>
                        <div class="col-sm-10">
                          <select name="children">
								<option value="1">1</option>	
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
						</select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="t_room" class="col-sm-2 control-label">No Of Rooms</label>
                        <div class="col-sm-10">
                          <select name="t_room">
								<option value="1">1</option>	
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
						</select>
                        </div>
                      </div>
                      
                      <div class="row">
                  <div class="col-lg-12">
                    <button class="btn btn-primary" name="save" style="float: right;margin-right: 20px;">Check</button>
                    
                  </div>
                </div>
                    </form>
					
			
				</div>
				<div class="clear"></div>
				<div class="grid_12">
					<h3 class="head1">Amenities</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
					
							<div class="text1 col1"><a href="#">Pick Up</a></div>
							We Offer A Huge Facility Of Pickup. 
					
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
					
							<div class="text1 col1"><a href="#">Spa</a></div>
							Spa, a facility that operates under the full-time, on-site supervision of a licensed health care professional whose primary purpose is to provide comprehensive traditional, complementary and/or alternative therapies.
						
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						
							<div class="text1 col1"><a href="#">Swimming</a></div>
							These consist of a small vessel (usually about 2.5 × 5 m) in which the swimmer swims in place, either against the push of an artificially generated water current or against the pull of restraining devices. These pools have several names, such as swim spas, swimming machines, or swim systems.
						
					</div>
				</div>

				<div class="grid_12">
					<h3 class="head1"></h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						
							<div class="text1 col1"><a href="#">Gym</a></div>
							A health club (also known as a fitness club, fitness centre, health spa, and commonly referred to as a gym) is a place that houses exercise equipment for the purpose of physical exercise.
						
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						
							<div class="text1 col1"><a href="#">WIFI</a></div>
							 ROSEWOOD has dedicated Internet Leased line connected to all the terminals throughout the Campus. Employees and Guest are free to access internet.
						
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						
							<div class="text1 col1"><a href="#">Bar</a></div>
							A great diversity of choices awaits you at the ROSEWOOD with restaurants and bars dedicated to fully please your appetite and quench your thirst with refreshing cocktails, fresh juices and smoothies as well as branded and locally produced alcoholic drinks.
					
					</div>
				</div>
				<hr>
				<div class="grid_12">
					<h3 class="head1">GET THE BEST OFFER FIRST</h3>
					<div class="text1 col1"><a href="#">Join Our Newsletter</a></div>
					</br>
					<form class="form-horizontal" role="form" method="POST">
                      	<div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        	<input type="text" name="email" class="form-control" id="inputEmail3">
                        </div>
                      	</div>
                      	<div class="row">
                  		<div class="col-lg-12">
                    		<button class="btn btn-primary" name="submit" style="float: right;margin-right: 20px;">SUBMIT</button>

                  	  	</div>
                		</div>
                		<div class="clear"></div>
                    </form>
				</div>
			</div>
		</div>
<?php include 'footer.php';?>