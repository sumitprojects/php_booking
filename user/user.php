<?php

include("dbconnection.php");
$dt = date("Y-m-d");
if(isset($_SESSION['reg_id']))
{
    
}
else
{
  
}


if($_GET['reg_id'] !="")
{
  $selquery="SELECT * from registration where reg_id=". $_GET['reg_id'];
  $reg_id = $_GET['reg_id'];
}
else
{
  $selquery="SELECT * from registration where reg_id=".$_SESSION['reg_id']; 
  $reg_id = $_SESSION['regid'];
}
$sqlquery=mysqli_query($dbconnection,$selquery);
$sqlfetch=mysqli_fetch_array($sqlquery);


global $sqlfetch1;

    if(!empty($_SESSION['booking_id']))
    {
      $sel="SELECT guest_name,tdate,check_in,check_out,adult,children,t_room  from booking where booking_id=".$_SESSION['booking_id'];
      $sqlquery1=mysqli_query($dbconnection,$sel);
      $sqlfetch1=mysqli_fetch_array($sqlquery1,MYSQLI_ASSOC);
    }



$_SESSION['setid'] = rand(); 


$dbconnection->close();

include 'header.php';
?>
	<body>
<!--==============================header=================================-->
		<header>
      <div class="container_12">
        <div class="grid_12">
          <div class="menu_block">
            <?PHP
            include 'menu.php';
            ?>

            <div class="clear"></div>

          </div>

        </div>
        
      </div>
      <a> &nbsp; WELCOME  &nbsp; <?php 
            echo  $sqlfetch['fname'] . " ". $sqlfetch['lname'];
            ?></a>
                   
    </header>

<!--==============================Content=================================-->
		<div class="content">
			
      <div class="container_12">

        <form method="post">
        <table>
        </br></br>
  <tr>
    <th>Guest Name</th>
    <th>Todays's Date</th>
    <th>Check In Date</th>
    <th>Check Out Date</th>
    <th>Adult</th>
    <th>Children</th>
    <th>Total Rooms</th>
   </tr>

   <?php
   echo "<tr>";

foreach ($sqlfetch1 as $key => $value) {
                    ?>
       <td><?php echo $value; ?></td>
      <?php
          }
           echo "</tr>";?>     
  </table>   
  </form>   

  <form method="post">
        <table>
        </br></br>
  <tr>
    <th>No</th>
    <th>Image</th>
    <th>Type</th>
    <th>Capacity</th>
    <th>Advanve</th>
    <th>Rent</th>
    <th>Return Amount</th>
   </tr>

       
  </table>   
  </form>   

  
      </div>
    </div>
<!--==============================footer=================================-->
<?php include 'footer.php';?>