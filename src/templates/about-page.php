<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  height: 350px; 
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.left{
width: 65%;
padding-top: 10px;
}
.right{
width:30%;
padding:0;
}
.about-section {
  padding: 25px;
  text-align: center;
  background-color: grey;
  color: black;
  margin:10px;
}
.a
{
line-height:150%;
font-size:20px;
font-family:italic;
padding-top:10px;
margin-left:70px;
}
.b
{
line-height:150%;
font-size:20px;
font-family:italic;
margin-left:70px;
}
.c
{
line-height:150%;
font-size:20px;
font-family:italic;
margin-left:70px;
}
.d
{
line-height:150%;
font-size:20px;
font-family:italic;
margin-left:70px;
}
.e
{
line-height:150%;
font-size:20px;
font-family:italic;
margin-right:120px;
}
</style>
</head>
<body>
  <div class="container">
<div class="about-section">
  <h3>About our Page</h5>
  <h6 style="color:white; font-size:15px;">Helps in storing the details of your certifications! An user-friendly app for maintaing the details of your certifications.</h6>
  <marquee direction="left"><h6 style="color:blue;">AWS helps in storing,maintaining, monitoring your details!</h6></marquee>
</div>

<div class="row">
  <div class="column left" >
    <h2 style="padding-left: 30px; font-size:18px; color:#DEB886;">User Details Registration</h2>
    <ul style="list-style-type:square;">
        
        <li class="a">User can register to our web application and can login using the credentials.</li>
        <li class="b">Authenticated users are allowed to login and enter their certification details.</li>
        <li class="c">Those details will be stored in Database and can be retrieved using search.</li>
        <li class="d">Once the expiry date of the certificate gets closer, user will be notified through mail.</li>
        <li class="e">AWS Services is used for all this above mentioned process.</li>
    </ul>
  </div>
  <div class="container column right" >
    <center><img src="images\logo.jpeg" alt="image not found" style="height:200px; width:200px; border-radius:50%; padding:10px;"></center>
  </div>
</div>
</div>

<?php include 'includes/footer.php'; ?>
