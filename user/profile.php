<?PHP
include 'header.php';
include("dbconnection.php");
echo $_SESSION['reg_id'];
  if(!empty($_SESSION['reg_id']))
    {
       $sel1 = "SELECT * from registration where reg_id=".$_SESSION['reg_id'];
       
   $rs_result = mysqli_query($dbconnection,$sel1);
   $r2 = mysqli_num_rows($rs_result);
    }
    
?>
	<body>
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
<!--==============================Content=================================-->
		<div class="content">
     
                    </br>
      <a href="profile.php"> &nbsp; My Profile</a> &nbsp;<a href="logout.php">Logout</a>
			<div class="container_12">
				<div class="grid_12">
<form method="post">
        <table>
        </br></br>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
    <th>Date Of Birth</th>
    <th>Gender</th>
    <th>Maritial Status</th>
    <th>Mobile No</th>
    <th>Email</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Security Question</th>
    <th>Answer</th>
   </tr>
                    <?php
                   while($row = mysqli_fetch_array($rs_result,MYSQLI_ASSOC))
                   {
                   ?>
       <tr> 
                   <td><?php echo $row['fname']. " " .$row['lname'];?></td>
                   <td><?php echo $row['address']; ?></td>
                   <td><?php echo $row['city']; ?></td>
                   <td><?php echo $row['state']; ?></td>
                   <td><?php echo $row['country']; ?></td>
                   <td><?php echo $row['dob']; ?></td>
                   <td><?php echo $row['gender']; ?></td>
                   <td><?php echo $row['maritial_status']; ?></td>
                   <td><?php echo $row['mobile_no']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['uname']; ?></td>
                   <td><?php echo $row['password']; ?></td>
                   <td><?php echo $row['sec_ques']; ?></td>
                   <td><?php echo $row['answer']; ?></td>
                 </tr>
                  <?php 
                  } ?>    
  </table>   
  </form>   
        </div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php include 'footer.php';?>