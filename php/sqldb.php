<?php
	// connecting to database
	$conn = mysqli_connect('localhost','root','','test');

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>