<!-- <!DOCTYPE html>
<html>
<head>

  <title>UDR</title>

  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">UDR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="registration.php">Register <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
        </ul>
          
          <a class="nav-link" href="logout.php" style="background-color: red;color: white;width: 70px;padding: 9px;">Logout</a>
  

      </div>
      </div>
    </div>
  </nav>
  <div class="container"> -->


<!DOCTYPE html>
<html>
<head>

  <title>UDR</title>

  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>

* {
  box-sizing: border-box;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: visible;
  background-color: #333;
  font-size:14px;
  font-family:Times New Roman;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


article {
  float: left;
  padding: 35px;
  font-family:Times New Roman;
  font-size: 18px;
  color: #ADD8E6;
  width: 35%;
  background-color: #f1f1f1;
  height: 450px;
  border: 1px solid black;
  margin: 10px;
}
aside {
  width:60%;
  padding:20px;
  float: right;
  background-color:white;
  height: 500px;
  margin-top: 5px;
}
.col
{
  column-count: 2;
  column-gap:35px;
  padding:5px;
}
.mySlides {display:none;}

.dropdown {
  float: left;
  overflow: visible;
}

.dropdown .dropbtn {
  font-size: inherit;  
  border: none;
  outline: none;
  color: white;
  padding: 12px 16px;
  background-color: inherit;
  font-family:Arial, Helvetica, sans-serif;
  margin: 0
 
}
.navbar{
  height:10px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: lightgrey;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

#logo{ 
  position:fixed; 
  top:0; 
  left:0; 
} 
#font {
  font-size: 14px;
}
#hdr {
  font-size: 17px;
}
#info {
  font-size: 20px;
}

</style>

</head>
<body>
    <header><center><h1 style="font-family:italic;font-size:50px;color:#85144b;">User Details Registration</h1>
<div id="logo"> 
<img src="images\logo1.jfif" alt="not available" style="height:70px;width:70px;padding:0;border-radius:60%;">
</div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a id="hdr" class="navbar-brand" href="index.php">UDR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
     
     <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a style="color: white;"  class="nav-link" href="about.php">About </a>
    </li>
          <li class="nav-item ">
             <div class="dropdown">
  <button  class="dropbtn">REGISTER</button>
  <div class="dropdown-content">
  <a  id="font" href="registration.php" name="form">Upload details by filling Form</a>
  <a id="font" href="uploadfile.php" name="file">Upload a File</a>
  <a id="font" href="update.php" name="file">Update Details</a>
  </div>
  </div>

          </li>
          
    <li class="nav-item">
            <a style="color: white;"  class="nav-link" href="search.php">Search</a>
          </li>

    <li class="nav-item">
      <a style="color: white;"  class="nav-link" href="mainforum.php">Discussion Forum</a>
    </li>
    
    <li class="nav-item">
      <a style="color: white;"  class="nav-link" href="contact.php">Contact Us</a>
    </li>
   
    
        </ul>
          
          <a class="nav-link" href="logout.php" style="background-color: red;color: white;width: 70px;padding: 9px;">Logout</a> 
    </div>
    </div>
  </nav>
  <div class="container">
  <script>
    $(window).scroll( function() {
    if( $(this).scrollTop() > 0 ) {
        $("#logo").hide();
    }
    else {
        $("#logo").show();
    }
   });
  </script>
