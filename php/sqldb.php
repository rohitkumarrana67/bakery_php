<?php
	// connecting to database
	$conn = mysqli_connect('localhost','rohitkumarrana67','Rana67rohit@','bakery');

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>