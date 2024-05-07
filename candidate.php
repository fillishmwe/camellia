<?php
  include 'header.php';
  include 'connect.php';
  $sel=mysqli_query($conn, "SELECT * FROM candidate");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
          <style>
             .form{
              width:59em;
             }
             table{
               margin-left:24em;
               margin-top:-30em;
             }
             th{
              padding:3px;
             }
             button{
               margin-left:25em;
               margin-top:-59em;
             }
             
          </style>

     <a href="newcandidate.php"><button class="btn btn-primary">Add Candidate</button></a>
     <form method="POST">
      <div class="form">x
     <table class=" table table-striped">
       <tr>
         <th>#</th>
         <th>post-id</th>
         <th>firstname</th>
         <th>lastname</th>
         <th>examdate</th>
         <th>phonenumber</th>
         <th>Marks</th>
         <th colspan="1">position</th>
       </tr>
       <?php
          while($data=mysqli_fetch_assoc($sel)){

          
       ?>
        <tr>
           <td><?php echo $data['id']; ?></td>
           <td><?php echo $data['post_id'];?></td>
           <td><?php echo $data['firstname'];?></td>
           <td><?php echo $data['lastname'];?></td>
           <td><?php echo $data['examdate'];?></td>
           <td><?php echo $data['phonenumber'];?></td>
           <td><?php echo $data['marks'];?></td>
           <td>
             <a href="deletecandid.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
           </td>
        </tr>
        <?php
        }
        ?>
 </table>
 </div>
     </form>
 