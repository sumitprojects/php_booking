<?PHP
include "dbconnection.php";

$sel1 = "SELECT * from rooms";
       
   $rs_result = mysqli_query($dbconnection,$sel1);
   $r1 = mysqli_num_rows($rs_result);

   $sel1 = "SELECT * from suite";
       
   $result = mysqli_query($dbconnection,$sel1);
   $r2 = mysqli_num_rows($result);

include "header.php";
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
			<div class="container_12">
      	</br>

<form method="post">
	<h3>Room Details</h3>
<table>
  <tr>
    <th>Room ID</th>
    <th>Image</th>
    <th>Type</th>
    <th>Capacity</th>
    <th>Advance</th>
    <th>Rent</th>
    <th>Return Amount</th>
  </tr>
  
 <?php
                   while($row = mysqli_fetch_array($rs_result,MYSQL_ASSOC))
                   {
                   ?>
                   <tr> 
                   <td><?php echo $row['room_no'];?></td>
                   <td><img class="img1" src="images/<?php echo $row[room_image]; ?>" /></td>
                   <td><?php echo $row['type']; ?></td>
                   <td><?php echo $row['capacity']; ?></td>
                   <td><?php echo $row['advance']; ?></td>
                   <td><?php echo $row['rent']; ?></td>
                   <td><?php echo $row['return_amt']; ?></td>
                 	 </tr>
                  <?php 
                  } ?>
              </tbody>
          </table>
</form>
			</div>

			<div class="container_12">



<form method="post">
	<h3>Suite Details</h3>
<table>
  <tr>
    <th>Suite No</th>
    <th>Image</th>
    <th>Type</th>
    <th>Capacity</th>
    <th>Advance</th>
    <th>Rent</th>
    <th>Return Amount</th>
  </tr>
  
 <?php
                   while($row = mysqli_fetch_array($result,MYSQL_ASSOC))
                   {
                   ?>
                   <tr> 
                   <td><?php echo $row['no'];?></td>
                   <td><a href="login.php"><img class="img1" src="images/<?php echo $row[image]; ?>"/></a></td>
                   <td><?php echo $row['type']; ?></td>
                   <td><?php echo $row['capacity']; ?></td>
                   <td><?php echo $row['advance']; ?></td>
                   <td><?php echo $row['rent']; ?></td>
                   <td><?php echo $row['return_amt']; ?></td>
                 	 </tr>
                  <?php 
                  } ?>
              </tbody>
          </table>
</form>
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>