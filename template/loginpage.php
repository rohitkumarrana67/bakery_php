<?php session_start(); ?>
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
    <link rel="stylesheet" href="../css/authpage.css?v=<?php echo time(); ?>">
    <!-- script-->
    
</script>
  </head>
  <body>
    <div class="wrapper">

      <div class="first"></div>
      <div class="second"></div>
      <div class="form-box">

        <!--login-->
        <div class="login">
          <button class="login-heading">LOG IN</button>
          <form action="../php/login.php" method="post">
            <div>
              <label for="">email:</label><br />
              <input
                type="email"
                name="email"
                placeholder="please enter your email"
              />
              <?php if(isset($_SESSION['email_error']))
                    {
                        echo ('<span class="error">'.$_SESSION['email_error'].'</span>');
                        unset($_SESSION['email_error']);
                    }
              ?>
            </div>

            <div>
              <label for="">Password:</label><br />
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
              />
              <?php if(isset($_SESSION['password_error']))
                    {
                        echo ('<span class="error">'.$_SESSION['password_error'].'</span>');
                        unset($_SESSION['password_error']);
                    }
              ?>
            </div>

            <div class="login-button">
              <button class="btn btn-success btn-block" type="submit">
                LOG IN
              </button>
            </div>
            <?php if(isset($_SESSION['not_match_error']))
                    {
                        echo ('<span class="error">'.$_SESSION['not_match_error'].'</span>');
                        unset($_SESSION['not_match_error']);
                    }
              ?>
          </form>
        </div>

        <div class="switcher">
        <div class="signup-switcher">
            <p>If you don't have any account, please sign up</p>
            <button > <a href="authpage.php">SIGN UP</a>  </button>
          </div>
            
        </div>
      </div>
    </div>
  </body>
</html>
