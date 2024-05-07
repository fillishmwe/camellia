<<?php
  include 'header.php';
  include 'connect.php';
  $sel=mysqli_query($conn, "SELECT * FROM candidate ORDER BY marks DESC");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
          <style>
             .form{
              width:58em;
             }
             table{
               margin-left:24em;
               margin-top:-32em;
             }
             th{
               background-color:darkgreen;
              padding:3px;
             }
             button{
               margin-left:25em;
               margin-top:-55em;
             }
             
          </style>

     <a href="newcandidate.php"><button class="btn btn-primary">Add Candidate</button></a>
     <form method="POST">
      <div class="form">
      
         
     <table class=" table table-striped"> 
       <tr>
          <th>CANDIDATE REPORT</th>
       </tr>
       <tr>
         <th>#</th>
         <th>post-id</th>
         <th>firstname</th>
         <th>lastname</th>
         <th>examdate</th>
         <th>phonenumber</th>
         <th>Marks</th>
       </tr>
       <?php
          while($row=mysqli_fetch_assoc($sel)){

          
       ?>
        <tr>
           <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['post_id'];?></td>
           <?php
             $postid=$row['post_id'];
             $postquery=mysqli_query($conn, "SELECT postname FROM post WHERE post_id='$postid'");
           ?>
           
           <td><?php echo $row['firstname'];?></td>
           <td><?php echo $row['lastname'];?></td>
           <td><?php echo $row['examdate'];?></td>
           <td><?php echo $row['phonenumber'];?></td>
           <td><?php echo $row['marks'];?></td>
        </tr>
        <?php
        }
        ?>
 </table>
 </div>
     </form>
 