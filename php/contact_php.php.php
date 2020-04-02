<?php

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$mailFrom=$_POST['email'];
	$message=$_POST['message'];
    $mobile=$_POST['mobile']
    
	$mailTo="himanshu.rathore802@gmail.com";
	$headers="From: ".$mailFrom;
	$txt="You have received an e-mail from ".$name."\n\n".$message."\n".$mobile."\n";
	mail($mailTo,$txt,$headers);
	header("Location: index.php?mailsend")

}
?>