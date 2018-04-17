<?php
// header("Location: dashboard.php");
	date_default_timezone_set('Asia/Kolkata');
	include "function.php";
	session_start();
if (is_ajax()) {
  if (isset($_POST["city"]) && !empty($_POST["city"])) { //Checks if action value exists
    $action = $_POST["city"];
    test_function($action);
  }
}

//crud for payment
if (isset($_POST["payment"])) {
    if (empty($_POST['bill_id'])) {
    	$booking_data = selectalldatabyid("booking", "booking_id", $_SESSION[ 'booking_id' ]);
		$reg_user = selectalldatabyid("registration","reg_id",$booking_data['reg_id']);
        
        $bill_data = array("reg_id" => $booking_data['reg_id'],
        					"room_no" => $booking_data['room_no'],
        	               "card_no" => $_POST['card_no'], 
        	               "cvv" => $_POST['cvv'],
        	               "cvv" => "Payment Done",
        	                "booking_id" => $_SESSION['booking_id']);
            $status = checkdata($bill_data);
            if ($status === 0) {
                $success = build_sql_insert("billing", $bill_data);
                $_SESSION['error'] = "Payment Done successfully";
                header("location:profile.php");
            } else {
                $_SESSION['error'] = "Please Fill All Data";
                header("location:bill.php");
            }
    } 
} else {
    // header("location:dashboard.php");
}


//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function($action){
	$room_type_data = selectdistictrowbyhotelcity("rooms", "room_type", "hotel_id",$action);
	//$room_type_data = json_encode($room_type_data);
    echo json_encode($room_type_data);
}



	function get_format($df) {
		$str = '';
		$str .= ($df->invert == 1) ? ' - ' : '';
		if ($df->y > 0) {
			// years
			$str .= ($df->y > 1) ? $df->y . ' Years ' : $df->y . ' Year ';
		} if ($df->m > 0) {
			// month
			$str .= ($df->m > 1) ? $df->m . ' Months ' : $df->m . ' Month ';
		} if ($df->d > 0) {
			// days
			$str .= ($df->d > 1) ? $df->d . ' Days ' : $df->d . ' Day ';
		} if ($df->h > 0) {
			// hours
			$str .= ($df->h > 1) ? $df->h . ' Hours ' : $df->h . ' Hour ';
		} if ($df->i > 0) {
			// minutes
			$str .= ($df->i > 1) ? $df->i . ' Minutes ' : $df->i . ' Minute ';
		} if ($df->s > 0) {
			// seconds
			$str .= ($df->s > 1) ? $df->s . ' Seconds ' : $df->s . ' Second ';
		}



		echo $str;
	}
	if ( isset($_POST[ "book" ]) ) {
		if ( isset($_POST[ "room_type" ]) ) {
			$check_date = explode(" ~ ",$_POST['daterange']);
			$check_in = date_create($check_date[0]);
			$check_out = date_create($check_date[1]);
			$date_diff = $check_in->diff($check_out);
			if ( $date_diff->invert !== 1 ) {
				$room_no_data = roomdatabytype($_POST[ 'room_type' ]);
				$booking_data = array( 'room_no' => $room_no_data[ 'room_no' ],
					'reg_id' => $_SESSION[ 'reg_id' ],
					'guest_name' => $_POST[ 'guest_name' ],
					'check_in' => date_format($check_in,"Y-m-d"),
					'check_out' => date_format($check_out,"Y-m-d"),
					'type' => $_POST['room_type'],
					'adult' => $_POST[ 'adult' ],
					'children' => $_POST[ 'children' ] );
				$status = checkdata($booking_data);
				if ( $status === 0 ) {
					$cap = $booking_data[ 'adult' ] + $booking_data[ 'children' ];
					if ( $cap <= $room_no_data[ 'capacity' ] ) {
						$rate = selectalldatabyid("rooms","room_no","'".$booking_data['room_no']."'");
						$room_rate = (double)str_replace("$","",$rate['rent']);
						$total_payable_amout = $room_rate * $date_diff->days;
						$amount = array("total_amount"=>$total_payable_amout);
						$booking_result = array_merge($booking_data,$amount);
						$status = build_sql_insert("booking", $booking_result);
						$room_booked = roomupdatequery("rooms","room_no",$booking_data['room_no']);
						$data = bookingidbyroomno("booking", "room_no", $booking_result[ 'room_no' ], "booking_id");
						$_SESSION[ 'reg_id' ] = $booking_result[ 'reg_id' ];
						$_SESSION[ 'booking_id' ] = $data[ 'booking_id' ];
						header("Location: payment.php");
					} else {
						$_SESSION[ 'error' ] = "<strong>Got some Error.</strong>";
						header("Location: bookroom.php");
					}
				} else {
					$_SESSION[ 'error' ] = "<strong>Please add the Data.</strong>";
					header("Location: bookroom.php");
				}

			} else {
				$_SESSION[ 'error' ] = "<strong>Please enter valid Date</strong>";
				header("Location: bookroom.php");
			}
		}
	}
	function checkdata($data)
	{
		$error = 0;
		foreach ( $data as $key => $value ) {
			if ($value == "") ) {
				$error = 1;
				break;
			} else {
				$value = filter_var($value, FILTER_SANITIZE_STRING);
			}
		}
		if ( $error == 0 ) {
			return 0;
		} else {
			return 1;
		}
	}
