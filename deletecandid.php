<?php
  include 'connect.php';

  $id=$_GET['id'];
  $del=mysqli_query($conn, "DELETE FROM candidate WHERE id='$id'");
  
    if($del){

       header("location:candidate.php");
    }
    else{
      header("location:candidate.php");
    }
?>