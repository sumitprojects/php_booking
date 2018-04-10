<?PHP
include 'function.php';
echo $_SESSION['reg_id'];
echo $_SESSION['booking_id'];

$booking_data = selectalldatabyid("booking","booking_id",$_SESSION['booking_id']); 

include "header.php";
?>

	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<?PHP include 'menu.php'; ?>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<table>
				</br></br>
				<tr>
    <th>Guest Name</th>
    <td><?php echo $booking_data['guest_name']; ?></td>
   </tr>
  <tr>
    <th>Check In Date</th>
    <td><?=$booking_data['check_in']?></td>
   </tr>
   <tr>
    <th>Check Out Date</th>
    <td><?=$booking_data['check_out']?></td>
   </tr>
   <tr>
<!--    	 <tr>
    <th>Room Type</th>
    <td><?php  echo $_POST[t_room]; ?></td>
   </tr>
   <tr>
    <th>Adult</th>
    <td><?php  echo $_POST[adult]; ?></td>
   </tr>
   <tr>
    <th>Children</th>
    <td><?php  echo $_POST[children]; ?></td>
   </tr>
 -->   <tr>
    <td><a href="bill.php">Generate Bill</a></td>
	</tr>
  </tr>          
  </table>
      	



 


				
			</div>
		</div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>