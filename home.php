<?php 
    include 'header.php';
    include 'connect.php';
    include 'session.php';
 
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>webapp home</title>
    <style>
       body{
          background-color:rgb(134, 131, 131);
          padding:0px;
          margin:0px;
          border-radius:5px;
       }
       .flex-container{
           margin-left:24em;
           margin-top:-29em;
           display:flex;
           flex-direction:row-reverse;
           flex-wrap:wrap;
           justify-content:space-between;
       }
        .flex-box{
           width:200px;
           height:200px;
           padding:-9em;
           margin-right:9em;
           background:linear-gradient(grey,rgb(145, 155, 145));
           text-align:center;
           border-radius:5px;

        }
        .flex-box:hover{
           background:linear-gradient(black, rgb(48, 121, 180));
        }
        p{
         color:white;
          text-align:center;
          margin-top:5em;
        }
      
    </style>
 </head>
 <body>
      <form method="post">
          
           <div class="flex-container"> 
            <div class="flex-box">
               <p>All post</p>
            </div>
            <div class="flex-box">
                <p>Candidate</p>
            </div>
            <div class="flex-box">
                  <p>User</p>
            </div>
          </div>
           
      </form>
 </body>
 </html>