<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <style type="text/css">   

    /*
    footer
    {
      background-color: #121212;
      margin-top:30px;
      position:relative;
      padding: 10px;           
      height:60px;
      color: white;
      position: relative;
      right: 0;
      bottom: 0;
      left: 0;
    }*/
    
    


  </style>
 </head>

 <body>


    
        <a href="createtopic.php"><h4 style="color:blue; font-style:bold;text-align:left;margin-left:15px;padding: 10px; margin-top:20px;"> &#9755<u> DiscussionForum </u></h4></a>
   
            
        <a href="mainforum.php"><h4 style="color:blue; font-style:bold;text-align:left;margin-left:25px;padding:0px; margin-top:20px;"> &#9755<u> Current Topics </u></h4></a>
    

   <div class="container" style="margin-top:20px;">

   <h2 style="text-align:center;font-style:bold;font-family: timesnewroman;">Discussion Forum</h2>

      <form action="add_topic.php" method="POST">

          <div class="form-group" style="font-family: timesnewroman;font-size:20px;color:black;">
            <label for="topic">Topic Name:</label>
            <input type="text" style="font-size: 17px;color:black;" class="form-control" id="topic" name="topic">
          </div>

          <div class="form-group" style="font-family: timesnewroman;font-size:20px;color:black;">
            <label for="comment">Details:</label>
            <textarea class="form-control" rows="5" id="detail" name="detail" style="font-size: 17px;color:black;"></textarea>
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" style="font-family: timesnewroman;font-size:20px;color:black;" >
            <label for="username">Name:</label>
            <input type="text" style="font-size: 17px;color:black;" class="form-control" id="username" name="name">
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" style="font-family: timesnewroman;font-size:20px;color:black;">
            <label for="email">Email address:</label>
            <input type="email" style="font-size: 17px;color:black;" class="form-control" id="email" name="email">
          </div>          

          <div  style="padding-left: 20px;padding-bottom: 10px;">
                          <input type="submit" name="submit_post" value="Post topic" class="btn btn-md btn-primary ">
                </div>  
      </form>
     
   </div>

   <footer>
     
   </footer>


 </body>
