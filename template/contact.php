<?php  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css?v=<?php echo time()?>" media="all" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/2f55da0773.js"
      crossorigin="anonymous"
    ></script>
<style>

form
{
    transition: all 2s ease-in-out;
}
.form-input
{
     width: 400px;
     border:none;
     outline: none;
     border-bottom: 2px solid black;
     font-size: 20px;
     margin-bottom: 16px;
}
        
input
{
  height: 45px;
}
form .submit{
  background:#ff5722;
  border-color: transparent;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
  letter-spacing: 2px;
  margin-top: 20px;
  height: 50px;
}

body {
  margin: 0;
  padding: 0;
}

.banner {
  height: 100vh;
  width: 100%;
  position: relative;
  display: flex;
}

.banner1 {
  background-image: url("../img/banner1.png");
  background-size: 100% 100%;
  width: 56%;
  height: 100%;
  position: relative;
  display: flex;
  align-items: center;
}

.welcome{
  position: absolute;
  top: 500px;
  right: 220px;
}

.banner1-content {
  color: white;
  margin: 0 100px;

  font-size: 20px;
}
.banner-img h1{
  margin-top: 80px;
  font-size: 50px;
}
.banner-img {
  margin-top: 90 px;
  width: 44%;
  height: 100%;
  text-align: center;
}

</style>
             
  </head>
  <body>
    <div class="banner">
      <div class="banner1">
        <div class="banner1-content">
          <p>Covered in switness with a touch of joy and</p>
          <p>little bits of love. That's how we bake it.</p>
        </div>
      </div>
      <div class="banner-img">
        <?php if(isset($_SESSION['username'])): echo "<h4 class='welcome'>Welcome ".$_SESSION['username']."</h4>"; ?>
        <?php endif; ?>
        <!-- <img src="../img/banner2.png" alt="" /> -->
          <br><br>
         <h1>Contact Us</h1>
         <br>
         <div class="contact-form">
          <form id="contact-form" method="post" action="php\contact_php.php">
            <input type="text" name="name" class="form-input" placeholder="Your Name"  required="">
            <br>
            <input type="email" name="email" class="form-input" placeholder="Your E-Mail" required="">
            <br>
            <input type="text" name="mobile" class="form-input" placeholder="Your Mobile No." required="">
            <br>
            <textarea name="message" class="form-input" placeholder="Message"></textarea>
            <br>
            <input type="submit" class="form-input submit" value="SEND MESSAGE">
          </form>
         </div>
      </div>
      <nav class="nav1 row">
        <div class="col-5 logo-content">
          <p class="logo">Bakery Town</p>
        </div>
        <div class=" nav1-links col-5">
          <a href="index.php" style="color:white">Home</a>
          <a href="" style="color: white">About</a>
          <a href="">Menu</a>
          <a href="">Contact</a>
          <?php if(isset($_SESSION['username'])): echo "<a href='logout.php'>Logout</a>"; ?>
          
          <?php else: echo "<a href='authpage.php'>Signup/Login</a>";?>

          <?php endif; ?>
        </div>
        <div class="nav1-cart col-2">
          <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          <a href=""><i class="fas fa-user-circle"></i></a>
        </div>
      </nav>
    </div>

    <!--Menu-->
   
    <h3 class="text-center features">FEATURES</h3>
    <div class="icon-outercontainer">
      <div class="icons-container">
        <div class="icon1">
          <img class="icon" src="../img/24hrs.png" alt="24hrs" />
          <p>24 Hrs Available</p>
        </div>
        <div class="icon1">
          <img class="icon" src="../img/pizza-icon.png" alt="pizza" />
          <p>Unlimited Pizza on Fridays</p>
        </div>
        <div class="icon1">
          <img class="icon" src="../img/cash.png" alt="cashback" />
          <p>Cashback 100% if not satisfied</p>
        </div>
        <div class="icon1">
          <img class="icon" src="../img/fast.png" alt="fast-delivery" />
          <p>Fast Delivery</p>
        </div>
      </div>
    </div>
  </body>
</html>
