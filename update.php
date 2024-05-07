<?php
  include 'header.php';
  include 'connect.php';
  include 'session.php';

  $id=$_GET['id'];
  $sel=mysqli_query($conn, "SELECT * FROM post WHERE id='$id'");

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .form{

             margin-left:25em;
             margin-top:-30em;
        }
        input[type=text]{

             width:30em;
        }
        input[type=submit]{
              width:29em;
              margin-left:3em;
        }
    </style>
 </head>
 <body>
       <form method="POST">
        <div class="form">
         <div class="update">

          <?php
          
             while($data=mysqli_fetch_assoc($sel)){

             
          ?>
               <h6>UPDATE POST</h6>
                <table>
                     <tr>
                         <td>id</td>
                         <td><input type="id" class="form-control" name='id' value="<?php echo $data['id']; ?>"></td>
                     </tr>
                     <tr>
                         <td>postname</td>
                         <td><input type="text" class="form-control" name='postname' value="<?php echo $data['postname']; ?>">
                          <?php
                          
                        }
                          ?>
                        </td>
                     </tr>
                     <tr>
                         <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="update" value="update"></td>
                     </tr>
                </table>
         </div>
         </div>
       </form>
 </body>
 </html>
 <?php
   include 'connect.php';
    if(isset($_POST['update'])){

        $id=$_GET['id'];
         $name=$_POST['postname'];
         
       $update=mysqli_query($conn, "UPDATE post SET postname='$name' WHERE id='$id'");
        if($update){
              header("location:viewpost.php");
        }
        else{
             header("location:viewpost.php");
        }

    }
 ?>