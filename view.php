<?php
  include 'header.php';
  include 'connect.php';
  include 'session.php';

  $sel=mysqli_query($conn, "SELECT * FROM post");

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
   
     table{
         margin-left:24em;
         margin-top:-32em;
         margin-right:12em;
         
     }
     .form{
        width:59em;
    }
    button{
               margin-left:23em;
               margin-top:-66em;
               width:5em;
             }
</style>
     <div class="form">

     
     <a href="viewpost.php">Back <button type="submit" class="btn btn-primary" name="submit" value="Back">Back</button></a>
<table class="table table-striped">
    <tr>
         <th>#</th>
         <th>Postname</th>
         <th colspan="3">Action</th>
    </tr>
    <?php
      while($data=mysqli_fetch_assoc($sel)){

      
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['postname']; ?></td>
         <td><a href="update.php?id=<?php echo $data['id']; ?>" class="btn btn-info">upate</a></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">delete</a></td>
    </tr>
    <?php
    
}
    ?>
</table>
</div>
