<?php
   $conn=mysqli_connect("localhost", "root", "", "camellia");

    if(!$conn){
         echo"no database connection";
    }
?>