<?php
	include 'header.php';
	include 'function.php';
		$booking_data = selectalldatabyid("booking", "booking_id", $_SESSION[ 'booking_id' ]);
		$reg_user = selectalldatabyid("registration","reg_id",$booking_data['reg_id']);
?>

    <body>
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
				<?PHP include 'menu.php';  var_dump($_SESSION['booking_id']);?>
                <div class="clear"></div>
            </div>
        </div>

    </div>
</header>
<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        <table>
            </br>
            <tr>
                <th>Registered User Name</th>
                <td><?php echo $reg_user[ 'fname' ]. " ". $reg_user['lname']; ?></td>
            </tr>
            <tr>
                <th>Guest Name</th>
                <td><?php echo $booking_data[ 'guest_name' ]; ?></td>
            </tr>
            <tr>
                <th>Check In Date</th>
                <td><?= $booking_data[ 'check_in' ] ?></td>
            </tr>
            <tr>
                <th>Check Out Date</th>
                <td><?= $booking_data[ 'check_out' ] ?></td>
            </tr>
            <tr>
                <th>Room Type</th>
                <td><?php echo $booking_data[ 'type' ]; ?></td>
            </tr>
            <tr>
                <th>Adult</th>
                <td><?php echo $booking_data[ 'adult']; ?></td>
            </tr>
            <tr>
                <th>Children</th>
                <td><?php echo $booking_data[ 'children' ]; ?></td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td><?= $booking_data[ 'total_amount' ] ?></td>
            </tr>
            <tr>
                <td><a href="bill.php">Do Payment</a></td>
            </tr>
        </table>

    </div>
</div>
<!--==============================footer=================================-->
<?php include 'footer.php'; ?>