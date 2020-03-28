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
  </head>
  <body>
    <div class="banner">
      <div class="banner1">
        <div class="banner1-content">
          <?php if(isset($_SESSION['username'])): echo "<h4 class='welcome'>Welcome ".$_SESSION['username']."</h4>"; ?>
          <?php endif; ?>
          <p>Covered in switness with a touch of joy and</p>
          <p>little bits of love. That's how we bake it.</p>
        </div>
      </div>
      <div class="banner-img">
        <img class="img3" src="../img/party.png" alt="" />
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
    <div class="menu-banner"><h1>Products</h1></div>
      

    <div class="jumbotron">
      <div class="row menu-box">
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card img-circle">
          <img
            class="card-img-top"
            src="../img/Cupcakes.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=cupcakes" class="btn btn-primary btn-block">Cupcakes</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/Cupcakes.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=cupcakes';">CupCakes</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/Cookies.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=cookies" class="btn btn-primary btn-block">Cookies</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/Cookies.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=cookies';">Cookies</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/cakes.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=cakes" class="btn btn-primary btn-block">Cakes</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/cakes.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=cakes';">Cakes</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/breads.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=breads" class="btn btn-primary btn-block">Breads</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/breads.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=breads';">Breads</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row pizza-box">
      <div class="col-12 pizza-pic">
        <!-- <div class="card" style="width:80%; margin: 0 auto">
          <img
            class="card-img-top"
            src="../img/pizza.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=pizza" class="btn btn-primary">Pizzas</a>
          </div>
        </div> -->
        <div class="card-holder1">
          <div class="imageholder">
            <a href=""><img src="../img/pizza.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=pizza';">Pizza</button>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="jumbotron jumbo2">
    <div class="row menu-box">
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/pudding.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=puddings" class="btn btn-primary btn-block">Puddings</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/pudding.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=puddings';">Puddings</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/jam.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=jams" class="btn btn-primary btn-block">Jams</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/jam.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=jams';">Jams</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/pickle.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=pickles" class="btn btn-primary btn-block">Pickles</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/pickle.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=pickles';">Pickles</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- <div class="card">
          <img
            class="card-img-top"
            src="../img/decoration.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <a href="details.php?product=decoration" class="btn btn-primary btn-block">decoration</a>
          </div>
        </div> -->
        <div class="card-holder">
          <div class="imageholder">
            <a href=""><img src="../img/decoration.jpg"></a>
          </div>
          <div class="cardbody">
            <button onclick="window.location.href = 'details.php?product=decoration';">Decoration</button>
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
    </div>

    <!-- 
     -->

     <div class="container-fluid footer">
        <div class="links">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Contact US</a>
          <a href="">Products</a>
        </div>

        <div class="social-links">
          <i class="fa fa-github" aria-hidden="true"></i>
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
          <i class="fa fa-google-plus-official" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>

        </div>
     </div>
    
  </body>
</html>
