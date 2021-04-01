<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

  	.jumbotron
  	{
    background: url("jumbotron_images/Done.png") no-repeat center center ;
    height:350px;
    margin-top:20px; 
    
	}
  </style>

<?php     //start php tag
//include connect.php page for database connection
include_once 'config/init.php';
  
  
  $job = new Job;

$tbl_name="forum_question"; // Table name 
//if submit is not blanked i.e. it is clicked.
if (isset($_POST['submit_post'])) //here give the name of your button on which you would like    //to perform action.
{ $data= array();
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['topic']=="" || $_REQUEST['detail']==""||$_REQUEST['name']==""||$_REQUEST['email']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled...";
        //header(location)
        header("Refresh:3; url=createtopic.php");
 		echo "<br><br>We are redirecting you to initial page... Please re-enter the information..";

  }
  
  else
  {
    
  	// get data that was sent from crete_topic.php 
		$data['topic']=$_POST['topic'];
		$data['detail']=$_POST['detail'];
		$data['name']=$_POST['name'];
		$data['email']=$_POST['email'];

		$data['date_time']=date('Y-m-d H:i:s');//create date time

		}

		
  // Close our connection
  
  
} 


  if($job->forum_question($data))
  {
    
   
    reDirect('mainforum.php','Post Uploaded Successfully!','success');
  }

?>