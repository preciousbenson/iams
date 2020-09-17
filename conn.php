<?php 
	
 	$conn = mysqli_connect("localhost", "root", "", "ias_db");

 	if ($conn) {
 		# code...
 		echo "Connected to Database";
 	} else {
 		# code...
 		echo "Not Connected".mysqli_connect_error();
 	}
 	
 ?>