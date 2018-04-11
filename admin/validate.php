<?php
// header("Location: dashboard.php");
include("function.php");
session_start();
$hotel_data = null;

function getemployeedata()
{
    $employee_data = array("first_name" => $_POST['first_name'],
        "last_name" => $_POST['last_name'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "state" => $_POST['state'],
        "country" => $_POST['country'],
        "dob" => $_POST['dob'],
        "gender" => $_POST['gender'],
        "maritial_status" => $_POST['maritial_status'],
        "mobile_no" => $_POST['mobile_no'],
        "designation" => $_POST['designation'],
        "salary" => $_POST['salary'],
        "branch_city" => $_POST['branch_city'],
        "email" => $_POST['email'],
        "u_name" => $_POST['u_name'],
        "password" => $_POST['password'],
        "join_date" => $_POST['join_date'],
        "status" => $_POST['status']
    );
    return $employee_data;
}

function gethoteldata()
{
    var_dump($_FILES);
    if ($_FILES['hotel_image']['error'] === 0) {
        $status = fileupload("assets/img/", $_FILES['hotel_image']['name'], $_FILES['hotel_image']['tmp_name']);
        if ($status === 1) {
            $hotel_data = array("hotel_name" => $_POST['hotel_name'],
                "address" => $_POST['address'],
                "city" => $_POST['city'],
                "state" => $_POST['state'],
                "country" => $_POST['country'],
                "hotel_image" => $_FILES['hotel_image']['name'],
                "hotel_status" => $_POST['hotel_status']);
            return $hotel_data;
        }
    }else {
            $hotel_data = array("hotel_name" => $_POST['hotel_name'],
                "address" => $_POST['address'],
                "city" => $_POST['city'],
                "state" => $_POST['state'],
                "country" => $_POST['country'],
                "hotel_status" => $_POST['hotel_status']);
            return $hotel_data;
        }
}


function getroomdata()
{
    $facility_data = null;
    if (!empty($_POST['facility'])) {
        $facility_data = implode(",", $_POST['facility']);
    }
    if ($_FILES['image']['error'] === 0) {
        $status = fileupload("assets/img/", $_FILES['image']['name'], $_FILES['image']['tmp_name']);
        if ($status === 1) {
            $room_data = array("hotel_id" => $_POST['hotel_id'],
                "room_no" => $_POST['room_no'],
                "image" => $_FILES['image']['name'],
                "room_type" => $_POST['room_type'],
                "capacity" => $_POST['capacity'],
                "rent" => $_POST['rent'],
                "facility" => $facility_data,
                "booking_status" => $_POST['booking_status'],
                "status" => $_POST['status']);
            return $room_data;
        }
    } else {
        $room_data = array("hotel_id" => $_POST['hotel_id'],
            "room_no" => $_POST['room_no'],
            "room_type" => $_POST['room_type'],
            "capacity" => $_POST['capacity'],
            "rent" => $_POST['rent'],
            "facility" => $facility_data,
            "booking_status" => $_POST['booking_status'],
            "status" => $_POST['status']);
        return $room_data;
    }

}

function fileupload($target_dir, $basename, $temp_name)
{
    $target_file = $target_dir . basename($basename);
    if (move_uploaded_file($temp_name, $target_file)) {
        return 1;
    } else {
        return 0;
    }
}

//employee crud
if (isset($_POST["addemp"])) {
    if (empty($_POST['emp_id'])) {
        $result = build_sql_check("employee", "email", $_POST['email']);

        if ($result == 0) {
            $status = checkdata(getemployeedata());
            if ($status === 0) {
                $success = build_sql_insert("employee", getemployeedata());
                echo '<script>window.location="http://localhost/admin/viewemp.php"</script>';
            } else {
                $_SESSION['error'] = "Please Fill the Data";
            }
        } else {
            echo "already exists";
        }
    } else {
        $emp_id = $_POST['emp_id'];
        $status = checkdata(getemployeedata());
        if ($status === 0) {
            $success = build_sql_update("employee", getemployeedata(), "emp_id", $emp_id);
            if ($success > 0) {
                header("location:viewemp.php");
            } else {
                $_SESSION['error'] = "Data not updated";
                header("location:viewemp.php");
            }

        } else {
            $_SESSION['error'] = "Please Fill the Data";
        }

    }
} else if (isset($_POST["updateemp"])) {
    $emp_id = $_POST['emp_id'];
    $_SESSION['emp_id'] = $emp_id;
    $_SESSION['action'] = "update";
    header("location:addemp.php");
} else if (isset($_POST['deleteemp'])) {
    if (!empty($_POST['emp_id'])) {
        $res = build_sql_delete("employee", "emp_id", $_POST['emp_id']);
        if (!empty($res)) {
            echo '<script>window.location="http://localhost/admin/viewemp.php"</script>';
        }
    }
} else if (isset($_POST['searchemp'])) {
    if (!empty($_POST['email'])) {
        $res = build_sql_check("employee", "email", $_POST['field']);
        var_dump($res);
        if (!empty($res)) {
            echo '<script>window.location="http://localhost/admin/empsearch.php"</script>';
        }
    }
} else if (isset($_POST['login'])) {
    $data = array("u_name" => $_POST['u_name'],
        "password" => $_POST['password']);
    $validatedata = checkdata($data);

    if ($validatedata === 0) {
        $status = adminlogin($data);
        if ($status === 1) {
            $_SESSION['u_name'] = $data['u_name'];
            header("location:dashboard.php");
        } else {
            $_SESSION['error'] = "Invalid Data";
            header("location:login.php");
        }
    } else {
        $_SESSION['error'] = "Please Fill the Data";
        header("location:login.php");
    }
}


//crud for hotel

if (isset($_POST["addhotel"])) {
    if (empty($_POST['hotel_id'])) {
        $hoteldata = gethoteldata();
        $result = build_sql_check("hotels", "city", $_POST['city']);
        if ($result == 0) {
            $status = checkdata($hoteldata);
            if ($status === 0) {
                $success = build_sql_insert("hotels", $hoteldata );
                echo '<script>window.location="http://localhost/admin/viewhotel.php"</script>';
            } else {
                $_SESSION['error'] = "Please Fill the Data";
                header("location:addhotel.php");
            }
        } else {
            echo "already exists";
        }
    } else {
        $id = $_POST['hotel_id'];
        $hoteldata = gethoteldata();
        $status = checkdata($hoteldata);
        if ($status === 0) {
            $success = build_sql_update("hotels", $hoteldata, "hotel_id", $id);
            if ($success > 0) {
                $_SESSION['error'] = "Data updated successfully";
                header("location:viewhotel.php");
            } else {
                $_SESSION['error'] = "Data not updated";
                header("location:viewhotel.php");
            }

        } else {
            $_SESSION['error'] = "Please Fill the Data";
        }

    }
} else if (isset($_POST["updatehotels"])) {
    $id = $_POST['hotel_id'];
    $_SESSION['hotel_id'] = $id;
    $_SESSION['action'] = "update";
    header("location:addhotel.php");
} else if (isset($_POST['deletehotels'])) {
    if (!empty($_POST['hotel_id'])) {
        $res = build_sql_delete("hotels", "hotel_id", $_POST['hotel_id']);
        if (!empty($res)) {
            echo '<script>window.location="http://localhost/admin/viewhotel.php"</script>';
        }
    }
} else {
    // header("location:dashboard.php");
}

//crud for rooms

if (isset($_POST["addrooms"])) {
    if (empty($_POST['room_id'])) {
        $roomdata = getroomdata();
        $result = build_sql_check("rooms", "room_no", $_POST['room_no']);
        if ($result == 0) {
            $status = checkdata($roomdata);
            if ($status === 0) {
                $success = build_sql_insert("rooms", $roomdata);
                echo '<script>window.location="http://localhost/admin/viewrooms.php"</script>';
            } else {
                $_SESSION['error'] = "Please Fill the Data";
                header("location:addhotel.php");
            }
        } else {
            echo "already exists";
        }
    } else {
        $id = $_POST['room_id'];
        $roomdata = getroomdata();
        $status = checkdata($roomdata);

        if ($status === 0) {
            $success = build_sql_update("rooms", $roomdata, "room_id", $id);
            if ($success > 0) {
                header("location:viewrooms.php");
            } else {
                $_SESSION['error'] = "Data not updated";
                header("location:viewrooms.php");
            }

        } else {
            $_SESSION['error'] = "Please Fill the Data";
        }

    }
} else if (isset($_POST["updaterooms"])) {
    $id = $_POST['room_id'];
    $_SESSION['room_id'] = $id;
    $_SESSION['action'] = "update";
    header("location:addrooms.php");
} else if (isset($_POST['deleterooms'])) {
    if (!empty($_POST['room_id'])) {
        $res = build_sql_delete("roms", "room_id", $_POST['room_id']);
        if (!empty($res)) {
            echo '<script>window.location="http://localhost/admin/viewrooms.php"</script>';
        }
    }
} else {
    // header("location:dashboard.php");
}


function checkdata($data)
{
    $error = 0;
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $error = 1;
            break;
        } else {
            $value = filter_var($value, FILTER_SANITIZE_STRING);
        }
    }
    if ($error == 0) {
        return 0;
    } else {
        return 1;
    }
}

?>