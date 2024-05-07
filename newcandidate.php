<?php

  include 'header.php';
  include 'connect.php';

  if(isset($_POST['send'])){
    $cid=$_GET['id'];
    $id=$_POST['post_id'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $exam=$_POST['examdate'];
    $phone=$_POST['phonenumber'];
    $marks=$_POST['marks'];
     

    $insert=mysqli_query($conn, "INSERT INTO `candidate`(`id`, `post_id`, `firstname`, `lastname`, `examdate`, `phonenumber`, `marks`) VALUES ('$cid','$id','$fname','$lname','$exam','$phone','$marks')")or die(mysqli_error($conn));
      

     if($insert){
        
        header("location:candidate.php");
     }
     else{
       header("location:newcandidate.php");
     }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>new candidate</title>
    <style>
         .candidate{
             margin-left:25em;
             margin-top:-35em;
             width:35em;
             width:56em;
         }
    </style>
</head>
<body>
     <form method="POST">
        <div class="candidate">

         
             <h1>Add candidate</h1>
              <table>
                 <tr>
                      <label for="">post_ID</label>
                     <select class="form-control" name="post_id">
                      
                     <?php
                     $SELECT = mysqli_query($conn, "SELECT * FROM post");
                     foreach ($SELECT as $row) {
                      echo'
                      <option value="'.$row['id'].'">'.$row['id'].'</option>>
                      ';
                     }
                    
                      ?>
                     </select>
                     <td>id</td>
                       <td><input type="id" class="form-control" name="id" value="<?php echo $row['id']; ?>"></td>
                 </td>
                 </tr>
              </table>
               
            firstname:
           <input type="text" class="form-control" name="firstname">
           lastname:
           <input type="text" class="form-control" name="lastname">
           examdate:
           <input type="text"  class="form-control" name="examdate">
           phonenumber:
           <input type="text"  class="form-control" name="phonenumber">
           Marks:
           <input type="text"  class="form-control" name="marks"><br>
           <input type="submit"  class="btn btn-primary" name="send" value="Add candidate">
           </div>
     </form> 
</body>
</html>