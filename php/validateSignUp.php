<?php
require_once 'pdo.php';
$username_error="";
$email_error="";
$password_error="";
$conpass_error="";

$username="";
$email="";
$password="";
$hashed_password = "";
$conpass="";

$signup_message="";

if($_SERVER["REQUEST_METHOD"]== "POST")
{  
    if($_POST['username']!="")
    {
          $username=check_input($_POST['username']); 
          $query='Select username from users where username="'.$username.'"';
          $checkUser=$pdo->query($query);
          while($row=$checkUser->fetch(PDO::FETCH_ASSOC))
          {
               if($row['username']==$username)
               {
                   $username_error="username already exists";
               }
          }
          
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
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$password))
        {
            $password_error="your password should have atleast 1 uppercase alphabet,1 lowercase alphabet,1 digit ,1 special character and should be atleast 8 characters";
        }
    }
    else
    {
        $password_error="password is required";
    }

    if($_POST['conpassword']!="")
    {
        $conpass=check_input($_POST['conpassword']); 
        if($password!=$conpass)
        {
            $conpass_error="passwords should match";
        } 
    }
    else
    {
        $conpass_error="please enter the password again";
    }

    /* if everything is fine ,entering data into the database users*/
    if($username_error=="" and $password_error=="" and $email_error=="" and $conpass_error=="")
    {
        $sql="INSERT INTO users(username,email,password) VALUES(:username,:email,:password)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(':username'=>$username,':email'=>$email,':password'=>$hashed_password));
        $signup_message="YOU HAVE BEEN SUCCESSFULLY SIGNED UP, PLEASE TRY TO LOG IN!!";
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