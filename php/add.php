<?php
  session_start();
  include("../includes/adminheader.php");
  require "pdo.php";
 $product=$_GET['product'];
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
     else{
       
        $query='Select id from '.$product.' where id="'.$_POST['id'].'"';
        $checkUser=$pdo->query($query);
        while($row=$checkUser->fetch(PDO::FETCH_ASSOC))
        {
             if($row['id']==$_POST['id'])
             {
                 $id_error="id already exists";
                 
             }
        }  
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
    
     if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) 
     {
         $image_error="please select an image";
     }
    }
   
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
    if($id_error==""&&$title_error==""&&$cost_error==""&&$rating_error==""&&$summary_error==""&&$review_error==""&&$image_error=="")
    {   //uploading image into file
        
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
       
        //inserting data into table
       
        $sql='INSERT INTO '.$product.' (id,title,cost,rating,summary,reviews,img) VALUES(:id,:title,:cost,:rating,:summary,:reviews,:img)';
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(':id'=>(int)$_POST['id'],':title'=>$_POST['title'],':cost'=>(int)$_POST['cost'],':rating'=>(float)$_POST['rating'],':summary'=>$_POST['summary'],':reviews'=>$_POST['review'],':img'=>$target_file));
        $_SESSION['success_add_message']="item succesfully added";

    } }



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet"  href="../css/table.css?v=<?php echo time()?>">
 </head>
 <body>
       <form  class="form-box"  method="post"  enctype="multipart/form-data">
           <h1> add item</h1>
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
               <button class="btn btn-success btn-block">add</button>
           </div>
           

       </form>

       </form>
       <?php 
              if(isset($_SESSION['success_add_message']))
              {
                echo('<div class="success-msg"><h3>'.$_SESSION['success_add_message'].'</h3></div>');
                unset($_SESSION['success_add_message']);
              }
              ?>
           <form class="form-box1"  action="product.php" method="post">
               <input type="hidden" name="product" value="<?= $product?>" >
               <button class="btn btn-secondary">go to product page</button>
           </form>
 </body>
 </html>