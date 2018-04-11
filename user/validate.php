<?php
// header("Location: dashboard.php");
	include("function.php");
	session_start();
	if ( isset($_POST[ "book" ]) ) {
		if ( isset($_POST[ "room_type" ]) ) {
			$check_in = date_create($_POST[ 'check_in' ]);
			$check_out = date_create($_POST[ 'check_out' ]);

			if ( $check_out > $check_in ) {
				$room_no_data = roomdatabytype($_POST[ 'room_type' ]);
				$booking_data = array( 'room_no' => $room_no_data[ 'room_no' ],
					'reg_id' => $_SESSION[ 'reg_id' ],
					'guest_name' => $_POST[ 'guest_name' ],
					'check_in' => $_POST[ 'check_in' ],
					'check_out' => $_POST[ 'check_out' ],
					'adult' => $_POST[ 'adult' ],
					'children' => $_POST[ 'children' ] );

				$status = checkdata($booking_data);

				if ( $status === 0 ) {
					$cap = $booking_data[ 'adult' ] + $booking_data[ 'children' ];
					if ( $cap <= $room_no_data[ 'capacity' ] ) {
						$status = build_sql_insert("booking", $booking_data);
						// $room_booked = roomupdatequery("rooms","room_no",$booking_data['room_no']);
						$data = bookingidbyroomno("booking", "room_no", $booking_data[ 'room_no' ], "booking_id");
						$_SESSION[ 'reg_id' ] = $booking_data[ 'reg_id' ];
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
			if ( empty($value) ) {
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
