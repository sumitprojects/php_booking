<?PHP
include "dbconnection.php";

$conn = $dbconnection;
if($_POST['setid']==$_SESSION['setid'])
{
  if(!empty($_POST["submit"]))
  {  
  $sqlexist = "SELECT * FROM employee where email='".$_POST['email']."'";
  $selectquery=mysqli_query($dbconnection, $sqlexist);
  $result = mysqli_fetch_array($selectquery);
  if (empty($result)) {
    if(isset($_POST["submit"])){
            // Create connection
            global $conn;
            $first_name    = $_POST['first_name'];
            $last_name    = $_POST['last_name'];
            $address    = $_POST['address'];
            $city    = $_POST['city'];
            $state    = $_POST['state'];
            $country    = $_POST['country'];
            $dob   = $_POST['dob'];
            $gender   = $_POST['gender'];
            $maritial_status = $_POST['maritial_status'];
            $mobile_no = $_POST['mobile_no'];
            $email   = $_POST['email'];
            $uname   = $_POST['uname'];
            $password   = $_POST['password'];
            $last_login   = $_POST['last_login'];
            $join_date = $_POST['join_date'];
            $status = $_POST['status'];
            $query  = "INSERT into employee  (first_name,last_name,address,city,state,country,dob,gender,maritial_status,mobile_no,email,uname,password,last_login,join_date,status) VALUES('" . $first_name . "','" . $last_name . "','" . $address . "','" . $city . "','" . $state . "','" . $country . "','" . $dob . "','" . $gender . "','" . $maritial_status . "','" . $mobile_no . "','" . $email . "','" . $uname . "','" . $password . "','" . $last_login . "','" . $join_date . "','" . $status . "')";
            $success = mysqli_query($dbconnection, $query);
            }
            if (!$success) {
            die("Couldn't enter data: ".$conn->error);
          }
  } else {
      echo "already exists";
  }
  }
}
           // $success = false;
            
$conn->close();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rosewood | International</title>

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
                <a class="navbar-brand" href="index.html">Rosewood International</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                MaitRi Patel
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>View Details<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Hotels</a>
                            </li>
                            <li>
                                <a href="notification.html"><i class="fa fa-bell "></i>Rooms</a>
                            </li>
                             <li>
                                <a href="progress.html"><i class="fa fa-circle-o "></i>Room Typess</a>
                            </li>
                             <li>
                                <a href="buttons.html"><i class="fa fa-code "></i>Employees</a>
                            </li>                           
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plus"></i>Add Info<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                            <a href="addhotel.php"><i class="fa fa-toggle-on"></i>Hotel</a>
                            </li>
                            <li>
                                <a href="addrooms.php"><i class="fa fa-bell "></i>Rooms</a>
                            </li>
                             <li>
                                <a href="addroomtypes.php"><i class="fa fa-circle-o "></i>Room Types</a>
                            </li>
                             <li>
                                <a href="addemp.php"><i class="fa fa-code "></i>Employees</a>
                            </li>                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="glyphicon glyphicon-edit"></i>Update Info<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Hotel</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Room</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Room Types</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Employees</a>
                            </li>
                         </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-stop"></i>Block<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Hotel</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Room</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Room Types</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Employees</a>
                            </li>
                         </ul>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-remove "></i>Delete<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Hotel</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Room</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Room Types</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Employees</a>
                            </li>
                         </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="glyphicon glyphicon-envelope"></i>SMS</a>
                        
                    </li>
                     
                      <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="glyphicon glyphicon-log-out"></i>Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
  <h3>Registration</h3>
  
  <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>User No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="label label-danger">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td><span class="label label-danger">the Bird</span> </td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><span class="label label-success">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td><span class="label label-primary">the Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><span class="label label-warning">Jacob</span></td>
                                        <td><span class="label label-success">Thornton</span></td>
                                        <td>@fat</td>
                                        <td><span class="label label-danger">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td><span class="label label-primary">the Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><span class="label label-warning">Jacob</span></td>
                                        <td><span class="label label-success">Thornton</span></td>
                                        <td>@fat</td>
                                        <td><span class="label label-danger">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><span class="label label-success">Mark</span></td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                </tbody>
                            </table>
  <br>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>
