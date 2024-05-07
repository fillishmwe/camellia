<?php

   include 'connect.php';

    session_start();

    if(isset($_POST['submit'])){
     
         $name=$_POST['username'];
         $pass=$_POST['password'];  
         
          $sel=mysqli_query($conn, "SELECT * FROM user WHERE username='$name' AND password='$pass'");

            if(mysqli_num_rows($sel)>0){

                foreach($sel as $row){

                     $_SESSION['user']= $row['id'];

                     header("location:home.php");
                }

               }else{

                    header("location:index.php"); 
               }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>camellia shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <style>
            form{
                 box-shadow:2px 2px 1px 1px aliceblue;
                 text-align:center;
                 width:25em;
                 margin-left:27em;
                 background-color:aliceblue;
                 border-radius:5px;
                 border-style:ridge;
                 height:25em;
                 padding:1px;
                 margin-top:10em;
            }
            h2{
                padding-bottom:10px;
            }
            input[type=text]{
                  margin-left:1em;
                 width:23em;
            }
            input[type=submit]{
                 width:23em;
            }


     </style>
</head>
<body>
      
</body><form method="POST">
      <h2> login form</h2>
       <label>username:</label>
       <input type="text" class="form-control" name="username"><br><br>
       <label>password:</label>
       <input type="text" class="form-control" name="password"><br><br>
       <input type="submit" class="btn btn-primary" name="submit" value="Login"><br><br>
        <p>have you an account?</p>
</form>
</html>