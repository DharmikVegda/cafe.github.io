<?php


$number = $_REQUEST['phone'];


$con= mysqli_connect("localhost", "root", "","test");
	if (!$con) 
		die("Unable to connect to MySQL: " . mysqli_connect_error());

		
$str="delete from list where number ='" . $number . "'";


mysqli_query($con,$str);


echo " <br><h3 style='color: #006400';>Your order cancel successfully!!!</h3><br><br>";


include("menu.html");

?>