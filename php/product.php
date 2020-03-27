<?php
  include("../includes/adminheader.php");
  require "pdo.php";

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
                  echo('<button>edit</button>');
                  echo("</td><td>");
                  echo('<button>delete</button>');
                  echo("</td></tr>");

              }
       ?>
       </table>
         <div class="add-item">
             <form action="add.php" method="post">
             <input type="text" name="cakes" hidden>   
             <button class="btn btn-block btn-primary">ADD ITEM</button>
             </form> 
        </div>
       </div>
  </body>
  </html>


