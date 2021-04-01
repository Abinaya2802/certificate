<!--
<div class="jumbotron container">

    <button class="btn btn-primary" >Welcome to user details registration!</button><br><br>
    
</div>
-->
<?php include 'includes/header.php'; ?>
      <h4 style= "color:black;padding-top:15px;"><center>Cloud Certification Details</center></h4>

<article class="certificates">
  <h4 style="color:white;background-color:grey;">Certifications</h4>
    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    <a href="https://aws.amazon.com/certification/certified-solutions-architect-associate/" target="_blank">AWS Certified Solution Architect-Associate</a></br>
    <a href="https://aws.amazon.com/certification/certified-developer-associate/" target="_blank">AWS Certified Developer-Associate</a></br>
    <a href="https://aws.amazon.com/certification/certified-sysops-admin-associate/" target="_blank">AWS Certified SysOps Administrator-Associate</a></br>
    <a href="https://aws.amazon.com/certification/certified-solutions-architect-professional/" target="_blank">AWS Certified Solution Architect-Professional</a></br>
    <a href="https://aws.amazon.com/certification/certified-devops-engineer-professional/" target="_blank">AWS Certified DevOps Engineer-Professional</a></br>
    <a href="https://cloud.google.com/certification/cloud-engineer" target="_blank">Associate Cloud Engineer</a></br>
    <a href="https://cloud.google.com/certification/cloud-architect" target="_blank">Professional Cloud Architect</a></br>
    <a href="https://cloud.google.com/certification/cloud-developer" target="_blank">Professional Cloud Developer</a></br>
    <a href="https://cloud.google.com/certification/data-engineer" target="_blank">Professional Data Engineer</a></br>
    <a href="https://docs.microsoft.com/en-us/learn/certifications/roles/solutions-architect" target="_blank">Azure Solution Architect</a></br>
    <a href="https://docs.microsoft.com/en-us/learn/certifications/azure-administrator/" target="_blank">Azure Administrator-Associate</a></br>
    <a href="https://docs.microsoft.com/en-us/learn/certifications/azure-developer/" target="_blank">Azure Developer-Associate</a></br>
    <a href="https://docs.microsoft.com/en-us/learn/certifications/roles/data-engineer" target="_blank">Azure Data Engineer-Associate</a></br>
  </marquee>
  </article>
 
   
   <aside>
  <div class="col">
    <p align="justify" style="color:black;font-size:15px;">
    Cloud certifications includes the certifications provided by CSP such as Google, Amazon, Azure, IBM, Adobe etc.
    In this web application we facilitate you by uploading your certification details and will maintain it. AWS is used for hosting our app, storing the data and for sending the notification. At any time user can view your certificate details and we will help in sending you the reminder for the expiry date of your certification. So that you can get ready for further process. The main reason, why we need to do cloud certifications are...Cloud Technology Is The Past, Present, and The Future; The Demand for Cloud Computing Professionals Will Continue to Grow. Happy Surfing! </p></div>
   <center>
   <img class="mySlides" src="images\cloud.png" alt="image not found" style="height:210px;width:250px;padding:10px;border-radius:60px;">
   <img class="mySlides" src="images\gcp.png" alt="image not found" style="height:210px;width:250px;padding:10px;">
   <img class="mySlides" src="images\aws.png" alt="image not found" style="height:210px;width:250px;padding:10px;">
   <img class="mySlides" src="images\azure.png" alt="image not found" style="height:210px;width:250px;padding:10px;border-radius:60px;">
 </center>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000);
}
</script>
</aside>
