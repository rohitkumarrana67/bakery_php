<?php 
  session_start();
  include("../includes/adminheader.php");
  require "pdo.php";
  $pid=$_GET['id'];

  $id_error="";
  $title_error="";
  $cost_error="";
  $rating_error="";
  $summary_error="";
  $review_error="";
  $image_error=""; 

 $id="";
 $title="";
 $cost="";
 $rating="";
 $summary="";
 $review="";
 $img="";

 
  // fetching the data for the particular product it;
  if(isset($_SESSION['product']))
  {
    $sql='SELECT * FROM '.$_SESSION['product'].' WHERE ID="'.$pid.'"';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $id=$row['id'];
    $title=$row['title'];
    $cost=$row['cost'];
    $rating=$row['rating'];
    $summary=$row['summary'];
    $review=$row['reviews'];
    $img=$row['img'];
  }

  if($_SERVER["REQUEST_METHOD"]== "POST")
 {   
    $id=$_POST['id'];
    $title=$_POST['title'];
    $cost=$_POST['cost'];
    $rating=$_POST['rating'];
    $summary=$_POST['summary'];
    $review=$_POST['review'];
    
     if($_POST['id']=='')
     {
         $id_error="id is required";
     }
     

     if($_POST['title']=="")
     {
         $title_error="title is required";
     }
     if($_POST['cost']=="")
     {
         $cost_error="cost is required";
     }
     if($_POST['rating']=="")
     {
         $rating_error="rating is required";
     }
     if($_POST['review']=="")
     {
         $review_error="review is required";
     }
     if($_POST['summary']=="")
     {
         $summary_error="summary is required";
     }
    
    
    }
   
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
    if($id_error==""&&$title_error==""&&$cost_error==""&&$rating_error==""&&$summary_error==""&&$review_error=="")
    {   //uploading image into file
        if(isset($_FILES['fileToUpload']) ) {
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $img=$target_file;
        echo($img);
        }
        //inserting data into table
       
       $sql='UPDATE '.$_SESSION['product'].' SET id=:id, title=:title, cost=:cost, rating=:rating, summary=:summary,reviews=:reviews, img=:img WHERE id="'.$pid.'"';
       $stmt=$pdo->prepare($sql);
       $stmt->execute(array('id'=>$_POST['id'],':title'=>$_POST['title'],':cost'=>$_POST['cost'],':rating'=>$_POST['rating'],':summary'=>$_POST['summary'],':reviews'=>$_POST['review'],':img'=>$img));
       $_SESSION['success_edit_message']="item succesfully edited";
    

    } }

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet"  href="../css/table.css?v=<?php echo time()?>">
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
         <div>
         <form  class="form-box"  method="post"  enctype="multipart/form-data">
           <h1> Edit item</h1>
           <div class="form-group">
               <label for="">id: </label><span><?= $id_error ?></span>
               <input class="form-control" name="id" type="number" 
               value="<?= $id?>"  
               >
           </div>
           <div class="form-group">
               <label for="">title:</label><span><?= $title_error ?></span>
               <input class="form-control" name="title" type="text" value="<?= $title?>"    >
           </div>
           <div class="form-group">
               <label for="">cost:</label><span><?= $cost_error ?></span>
               <input class="form-control" name="cost" type="number"
               value="<?= $cost?>"  > 
           </div>
           <div class="form-group">
               <label for="">rating:</label><span><?= $rating_error ?></span>
               <input class="form-control" name="rating" type="number" value="<?= $rating?>"   >
           </div>
           <div class="form-group">
               <label for="">summary:</label><span><?= $summary_error ?></span>
               <input class="form-control" name="summary" type="text" value="<?= $summary?>"  >
           </div>
           <div class="form-group">
               <label for="">review:</label><span><?= $review_error ?></span>
               <input class="form-control" name="review" type="text"
               value="<?= $review?>"  >
           </div>
           <div class="form-group">
               <label for="">image:</label><span><?= $image_error ?></span>
               <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*">
           </div>

           <div class="form-group">
               <button class="btn btn-success btn-block">Edit</button>
           </div>
           

       </form>
          <?php 
              if(isset($_SESSION['success_edit_message']))
              {
                echo('<div class="success-msg"><h3>'.$_SESSION['success_edit_message'].'</h3></div>');
                unset($_SESSION['success_edit_message']);
              }
              ?>
           <form class="form-box1"  action="product.php" method="post">
               <input type="hidden" name="product" value="<?= $_SESSION['product']?>" >
               <button class="btn btn-secondary">go to product page</button>
           </form>
         </div>
  </body>
  </html>