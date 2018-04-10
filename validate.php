<?php
// header("Location: dashboard.php");
session_start();
include("dbconnection.php");

if (isset($_POST["userlogin"])) {
    $selrec = "SELECT * from registration where uname='" . $_POST['uname'] . "' and password='" . $_POST['password'] . "'";
    $selquery = mysqli_query($dbconnection, $selrec);
    $sqlfetch = mysqli_fetch_array($selquery);


    if (!empty($sqlfetch) && is_array($sqlfetch)) {
        $_SESSION['reg_id'] = $sqlfetch['reg_id'];
        echo $_SESSION['reg_id'];
        //$_SESSION['room_id'] = $_GET['roomid'];
        header("location: user/profile.php");

    } else {
        $msg = "<br><font color='black'><marquee loop=5 ><strong>Login Failed</strong></marquee></font>";
    }
}
