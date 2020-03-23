<?php
$username_error="";
$email_error="";
$password_error="";
$conpass_error="";

$username=$email=$password=$conpass="";

if($_SERVER["REQUEST_METHOD"]== "POST")
{  
    if($_POST['username']!="")
    {
          $username=check_input($_POST['username']); 
    }
    else
    {
        $username_error="Please Enter a username";
    }

    if($_POST['email']!="")
    {
        $email=check_input($_POST['email']); 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $email_error="invalid email address";
          } 
    }
    else
    {
        $email_error="Email is required";
    }

    if($_POST['password']!="")
    { 
        $password=check_input($_POST['password']);
    }
    else
    {
        $password_error="password is required";
    }

    if($_POST['conpassword']!="")
    {
        $conpass=check_input($_POST['conpass']);  
    }
    else
    {
        $conpass_error="please enter the password again";
    }
}

    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    



?>