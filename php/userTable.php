<?php
		include("sqldb.php");

		$sql = "create table IF NOT EXISTS users(username VARCHAR(255), email VARCHAR(255), password VARCHAR(255))";

		if(!mysqli_query($conn, $sql)){    
        	  
        	echo ("Product table not created");
    	}
?>