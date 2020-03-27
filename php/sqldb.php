<?php
	// connecting to database
	$conn = mysqli_connect('localhost','root','','bakery');

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>