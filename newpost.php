<?php

    include 'header.php';
    include 'connect.php';
    include 'session.php';

     if(isset($_POST['submit'])){

         $name=$_POST['postname'];

         $insert=mysqli_query($conn, "INSERT INTO post(postname) VALUES('$name')");

            if($insert){

                header("location:viewpost.php");
            }
            else{
                 header("location:newpost.php");
            }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
         .newpost{
             margin-left:25em;
             margin-top:-30em;
         }
         .head{
             margin-left:12em;
         }
         input[type=text]{
            width:28em;
         }
         input{
              width:28em;
         }
    </style>
</head>
<body>
    <form method="POST">
        <div class="newpost">
           <div class="head">

            <h5>NEW POST</h5>
           </div>
            postname:
          <input type="text" class="form-control" name="postname"><br>
          <input type="submit" class="btn btn-primary" name="submit" value="ADD NEW">
          </div>
    </form>
</body>
</html>