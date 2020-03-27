<?php
  session_start();
   require_once 'pdo.php';

  
    if(isset($_POST['email'])&& isset($_POST['password']))
    {  
        $email=check_input($_POST['email']);
        $password=check_input($_POST['password']);

        // checking the presence in the database 
        $sql = 'SELECT * FROM users WHERE email="'.$email.'"'; 
        $result = $pdo->prepare($sql); 
        $result->execute(); 
        
        while($row = $result->fetch()){
                $hashed_password = $row['password'];
                $username = $row['username'];

                if(password_verify($password,$hashed_password)){
                    echo($username);
                    $_SESSION['username']=$username;
                    header("Location: ../template/index.php");
                }else{
                    $_SESSION['not_match_error']="email and password don't match";
                    header("Location: ../template/loginpage.php");
                    return;
                }
        }

   }

    else
    {
        if(!isset($_POST['email']))
        {
            $_SESSION['email_error']="email is required";

        }
        if(!isset($_POST['password']))
        {
            $_SESSION['password_error']="password is required";
        }

        header("Location: ../template/loginpage.php");
         return;
        
    }



    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>