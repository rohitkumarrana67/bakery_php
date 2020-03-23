<?php include('../php/validateSignUp.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/authpage.css" />
    <!-- script-->
    <script>function loginChanger() {
  
  var signup = document.getElementsByClassName("signup");
  var login = document.getElementsByClassName("login");
  var signupSwitcher=document.getElementsByClassName("signup-switcher");
  var loginSwitcher=document.getElementsByClassName("login-switcher");
  signup[0].style.display = "none";
  login[0].style.display="block";
  signupSwitcher[0].style.display="block";
  loginSwitcher[0].style.display="none";
   }
   function signupChanger() {
  
  var signup = document.getElementsByClassName("signup");
  var login = document.getElementsByClassName("login");
  var signupSwitcher=document.getElementsByClassName("signup-switcher");
  var loginSwitcher=document.getElementsByClassName("login-switcher");
  signup[0].style.display = "block";
  login[0].style.display="none";
  signupSwitcher[0].style.display="none";
  loginSwitcher[0].style.display="block";
   }
</script>
  </head>
  <body>
    <div class="wrapper">
      <div class="first"></div>
      <div class="second"></div>
      <div class="form-box">
        <!--signup-->
        <div class="signup">
          <button class="signup-heading">SIGN UP</button>
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
              <label for="">Username:</label>
              <span class="error"><?= $username_error ?> </span><br />
              <input
                type="text"
                name="username"
                placeholder="please enter your username"
                value="<?= $username ?>"
              />
            </div>
            <div>
              <label for="email">Email:</label
              ><span class="error"><?= $email_error ?></span><br />
              <input
                type="text"
                name="email"
                placeholder="please enter your email"
                value="<?= $email ?>"
              />
            </div>
            <div>
              <label for="">Password:</label>
              <span class="error"> <?= $password_error ?></span><br />
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
                value="<?= $password ?>"
              />
            </div>
            <div>
              <label for="">Confirm Password:</label
              ><span class="error"><?= $conpass_error ?></span><br />
              <input
                type="password"
                name="conpassword"
                placeholder="confirm your password"
                value="<?= $conpass ?>"
              />
            </div>
            <div class="signup-button">
              <button class="btn btn-success btn-block" type="submit">
                submit
              </button>
            </div>
          </form>
        </div>

        <!--login-->
        <div class="login">
          <button class="login-heading">LOG IN</button>
          <form action="">
            <div>
              <label for="">email:</label><br />
              <input
                type="email"
                name="email"
                placeholder="please enter your email"
              />
            </div>

            <div>
              <label for="">Password:</label><br />
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
              />
            </div>

            <div class="login-button">
              <button class="btn btn-success btn-block" type="submit">
                LOG IN
              </button>
            </div>
          </form>
        </div>

        <div class="switcher">
          <div class="login-switcher">
            <p>If you have existing account</p>
            <button onclick="loginChanger()">LOG IN</button>
          </div>
          <div class="signup-switcher">
            <p>If you don't have account</p>
            <button onclick="signupChanger()">SIGN UP</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
