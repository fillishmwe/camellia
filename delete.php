<?php
  include 'connect.php';

  $id=$_GET['id'];
  $del=mysqli_query($conn, "DELETE FROM post WHERE id='$id'");
  
    if($del){

       header("location:viewpost.php");
    }
    else{
      header("location:viewpost.php");
    }
?>