<?php
	// connecting to database
	$conn = mysqli_connect('localhost','rohitkumarrana67','Rana67rohit@','products');

	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>