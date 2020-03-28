<?php
   session_start();
  include("../includes/adminheader.php");
  require "pdo.php";
  $_SESSION['product']=$_POST['product'];

 // delete function for the admin
  if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $sql = 'DELETE FROM '.$_POST['product'].' WHERE id = :zip';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
   }

// printing all the products
  if(isset($_POST['product']))
  {
     $sql='SELECT * FROM '.$_POST['product'];
     $stmt = $pdo->query($sql);
     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  else
  {
      echo("something went wrong");
      die();
  }

  ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../css/table.css">
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
      <div class="table-box">
          <h1><?php echo($_POST['product'])?></h1>
       <table>
           <tr class="thh">
               <td>id</td>
               <td>title</td>
               <td>cost</td>
               <td>rating</td>
               <td>summary</td>
               <td>edit</td>
               <td>delete</td>
           </tr>
       <?php
            
            foreach ( $rows as $row ) {
                 echo "<tr><td>";
                  echo($row['id']);
                  echo("</td><td>");
                  echo($row['title']);
                  echo("</td><td>");
                  echo($row['cost']);
                  echo("</td><td>");
                  echo($row['rating']);
                  echo("</td><td>");
                  echo($row['summary']);
                  echo("</td><td>");
                  echo('<a class="btn btn-primary btn-block" href="edit.php?id='.$row['id'].'">edit</a>');
                  echo("</td><td>");
                  echo('<form method="post"><input type="hidden" ');
                  echo('name="id" value="'.$row['id'].'">');
                  echo('<input type="hidden" name="product" value="'.$_POST['product'].'">');
                  echo('<input class="btn btn-primary btn-block" type="submit" value="Delete" name="delete">');
                  echo("\n</form>\n");
                  echo("</td></tr>");

              }
       ?>
       </table>
         <div class="add-item">
             <a class="btn btn-primary btn-block" href="add.php?product=<?php echo($_POST['product']);?>">add items</a>
        </div>
       </div>
  </body>
  </html>


