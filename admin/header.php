<?php
include("function.php");
session_start();
if(empty($_SESSION['u_name']))
{
  header("Location: login.php");
}
$data = selectbyusername($_SESSION['u_name']);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<a class="navbar-brand" href="dashboard.php"></a>
            </div>

            <div class="header-right">

                ROSEWOOD INTERNATIONAL</br>
				<?php 
            echo  $data['first_name'] . " ". $data['last_name'];            ?>
                
                

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="	glyphicon glyphicon-eye-open"></i>View Details<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewhotel.php"></i>Hotels</a>
                            </li>
                             <li>
                                <a href="viewrooms.php"></i>Rooms</a>
                            </li>
                             <li>
                                <a href="viewemp.php"></i>Employees</a>
                            </li>                           
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plus"></i>Add Info<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addhotel.php"></i>Hotel</a>
                            </li>
                            <li>
                                <a href="addrooms.php"></i>Rooms</a>
                            </li>
                             <li>
                                <a href="addemp.php"></i>Employees</a>
                            </li>                           
                        </ul>
                    </li>
                    <li>
                        <a href="viewbooking.php"><i class="glyphicon glyphicon-asterisk"></i>Booking</a>

                    </li>
                    <li>
                        <a href="viewuser.php"><i class="glyphicon glyphicon-user"></i>Users</a>

                    </li>
                    <li>
                        <a href="sms.php"><i class="glyphicon glyphicon-envelope"></i>SMS</a>
                        
                    </li>
                   
                    <li>
                        <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Logout</a>
                    </li>
                </ul>

            </div>

        </nav>