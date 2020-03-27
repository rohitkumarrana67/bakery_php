<?php
  include("../includes/adminheader.php");
 require "pdo.php";

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
       <form  method="post">
           <div class="form-group">
               <label for="">id:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           <div class="form-group">
               <label for="">title:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           <div class="form-group">
               <label for="">cost:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           <div class="form-group">
               <label for="">rating:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           <div class="form-group">
               <label for="">summary:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           <div class="form-group">
               <label for="">review:</label>
               <input class="form-control" name="id" type="number" placeholder="please enter the id">
           </div>
           

       </form>
 </body>
 </html>