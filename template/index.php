<?php  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css" media="all" />
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
        <img src="../img/banner2.png" alt="" />
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
          <a href="authpage.php">Signup/Login</a>
        </div>
        <div class="nav1-cart col-2">
          <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          <a href=""><i class="fas fa-user-circle"></i></a>
        </div>
      </nav>
    </div>

    <!--Menu-->
    <div class="menu-banner"><h1>MENU</h1></div>
    <div class="row menu-box">
      <div class="col-3">
        <div class="card">
          <img
            class="card-img-top"
            src="../img/Cupcakes.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <p class="card-text">
              THE BEST CUPCAKES IN THE TOWN.
            </p>
            <a href="details.php?product=cupcakes>" class="btn btn-primary"
              >CUPCAKES</a
            >
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img
            class="card-img-top"
            src="../img/Cookies.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <p class="card-text">
              GRANDMA'S COOKIES
            </p>
            <a href="details.php?product=cookies" class="btn btn-primary"
              >COOKIES</a
            >
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img
            class="card-img-top"
            src="../img/cakes.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <p class="card-text">
              BAKED WITH LOVE
            </p>
            <a
              href="details.php?product=cakes"
              class="btn btn-primary btn-block"
              >CAKES</a
            >
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img
            class="card-img-top"
            src="../img/breads.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <p class="card-text">
              HEALTHY BREADS.
            </p>
            <a href="details.php?product=breads" class="btn btn-primary"
              >BREADS</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="row pizza-box">
      <div class="col-6 pizza-content">
        <div class="pizza-above">
          <img src="../img/pizza1.png" alt="pizza icon" />
          <h4>Pizza makes anything possible</h4>
        </div>
      </div>
      <div class="col-6 pizza-pic">
        <div class="card" style="width:80%; margin: 0 auto">
          <img
            class="card-img-top"
            src="../img/pizza.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <p class="card-text">
              BAKED WITH LOVE
            </p>
            <a href="details.php?product=pizzas" class="btn btn-primary "
              >Pizzas</a
            >
          </div>
        </div>
      </div>
    </div>

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
