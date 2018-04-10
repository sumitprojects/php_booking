<?php
include ("dbconnection.php");
?>
<?php
$msg='';
$errormsg='';
if(isset($_POST["save"]))
{



      if (empty($_POST["fname"])) {
               $nameErr = "Name is required";
            }


      function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
  
      include ("dbconnection.php");
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $country = $_POST['country'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $maritial_status = $_POST['maritial_status'];
      $mobile_no = $_POST['mobile_no'];
      $email = $_POST['email'];
      $uname = $_POST['uname'];
      $password = $_POST['password'];
      $sec_ques = $_POST['sec_ques'];
      $answer = $_POST['answer'];

      $sql ="INSERT INTO registration(fname,lname,address,city,state,country,dob,gender,maritial_status,mobile_no,email,uname,password,sec_ques,answer) values('$fname','$lname','$address','$city','$state','$country','$dob','$gender','$maritial_status','$mobile_no','$email','$uname','$password','$sec_ques','$answer')";

      if (mysqli_query($dbconnection, $sql)) 
                {
                   header("Location: login.php");
                }
          else
                {
            $errormsg='<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Got some Error.</strong>
                </div>';
                }

}


include 'header.php';
?>
  <body>
<!--==============================header=================================-->
    <header>
      <div class="container_12">
        <div class="grid_12">
          <div class="menu_block" style="    margin-top: -10px;">
            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
              <ul class="sf-menu">
                <li><a href="index.php">ABOUT</a></li>
                <li><a href="tours.php">HOT TOURS</a></li>
                <li><a href="special.php">SPECIAL OFFERS</a></li>
                <li><a href="rooms.php">ROOMS</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
              </ul>
            </nav>
            <div class="clear"></div>
          </div>
        </div>
        
      </div>
    </header>
<!--==============================Content=================================-->
    <div class="content">
      <div class="container_12">
            <h3>Register HERE</h3>
            <br/>
            <br/>
            
                    <div class="tab-pane active" id="tab1">
                      <p><span class = "error">* required field.</span></p>
                      <form class="form-horizontal" role="form" method="POST"  action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="fname">
                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3" name="lname" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3"  class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                          <input type="text"  name="city" class="form-control">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                          <input type="text" name="state" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                          <input type="text" name="country" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="dob" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="text" name="gender" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Maritial Status</label>
                        <div class="col-sm-10">
                          <input type="text"  name="maritial_status" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Mobile no</label>
                        <div class="col-sm-10">
                          <input type="text" name="mobile_no" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name="email" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" name="uname" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Security Question</label>
                        <div class="col-sm-10">
                          <input type="text" name="sec_ques" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Answer</label>
                        <div class="col-sm-10">
                          <input type="text" name="answer" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                  <div class="col-lg-12">
                    <button class="btn btn-primary" name="save" style="float: right;margin-right: 20px;">SAVE</button>
                    <!-- <button class="btn btn-danger">BACK</button> -->
                  </div>
                </div>
                    </form>
                    </div>
      </div>
    </div>
<!--==============================footer=================================-->
   
<?php
   include 'footer.php';
?>