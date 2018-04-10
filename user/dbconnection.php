<?php
$dbconnection = mysqli_connect("localhost","root","mysql","hoteldb");

if(!$dbconnection)
{
	echo "Connection failed";
}
?>