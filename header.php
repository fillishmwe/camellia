<?php
  include 'connect.php';
  include 'session.php';
  
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>camellia dashboard</title>
    <style>
         body{
            background-color:rgb(134, 131, 131);
          margin:0px;
          padding:0px;
          box-sizing:border-box;
         }
       .header{
           height:6em;
           margin-right:-10em;
           color: white;
           background-color:rgb(32, 80, 122);
       }
       h3{
          text-align:center;
          
       }
       .navbar{
           background-color:rgb(32, 80, 122);
           box-sizing:border-box;
           width:20em;
           margin-left:-5.45em;
           padding-top:-3em;
           margin-top:-1.32em;
           height:38em;
       }
       .navbar ul li{
          padding:2em;
          border-bottom:1px solid aliceblue;
          list-style:none;
          width:18em;
          text-align:center;
          }
          .navbar ul li:hover{
                text-align:center;
                 width:18em;
                background-color:rgb(35, 106, 168);
          }
          .navbar ul li a{
            color:rgb(0, 0, 0);
            list-style:none;
            color:white;
            text-decoration:none;  
          }
          img{
               width:6em;
               margin-left:-4em;
               font-size:25px;
               margin-top:-6em;
          }
    </style>
</head>
<body>
  <form method="POST">
  <div class="container">
          <div class="header">
             <h3>CAMELLIA SHOP LIMITED</h3>
          </div>
           <div class="logo">
              <img src="canmel.jpg">

           </div>
              <div class="navbar">
                  <ul>
                     <li><a href="home.php">HOME</a></li>
                     <li><a href="newpost.php">NEW POST</a></li>
                     <li><a href="viewpost.php">ALL POSTS</a></li>
                     <li><a href="candidate.php">CANDIDATE</a></li>
                     <li><a href="logout.php">LOGOUT</a></li>
                     <li><a href="report.php">REPORT</a></li>
                  </ul>
              </div>
        </div>
</form>
    
</body>
</html>