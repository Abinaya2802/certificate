<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MAIN FORUM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  
   <body>
  
    
      
        <a href="createtopic.php"><h4 style="color:blue; font-style:bold;text-align:left;margin-left:15px;padding: 10px; margin-top:20px;"> &#9755<u> DiscussionForum </u></h4></a>
    
  
  </body>


 <style>
         #msg{
  margin-top: 15px;
}

  


</style>

<div id="msg">
    <?php displayMessage(); ?>
</div>
	<body>
			
			<div class="container" style="margin-top:10px;padding:10px;">
				
				<h4><center>List of all the discussions</center></h4>
				<div class="card card-header">
					<a href="createtopic.php" style="font-size:15px;padding: 10px;color:blue;"><b>Create New Discussion...</b> </a>					
				</div>
  				<p style="font-size:20px; padding-top: 5px;color:black;">You can click on the topic name to join the discussion.. </p>
				<table class="table table-hover table-responsive table-inverse table-striped">

					<thead>
				      <tr>
				        <!--<th style="text-align:center;">#</th>-->
				        <th class="bg-primary" style="text-align:center;width:350px;font-size:15px;"><b>Topic</b></th>
				        <th class="bg-primary" style="text-align:center;width:350px;font-size:15px;"><b>Views</b></th>
				        <th class="bg-primary" style="text-align:center;width:350px;font-size:15px;"><b>Date/Time</b></th>
				      </tr>
				    </thead>

				    <tbody>
					
				

		


<?php



foreach($res as $rows):
 
?>
<tr style="height:1px;padding:0;">

<td  style="text-align:center;font-size:17px;"><a href="viewtopic.php?topic_id=<?php echo $rows->topic_id ?> "><?php echo $rows->topic ?></a><BR></td>
<td  style="text-align:center;font-size:15px;"><?php echo $rows->view ?></td>
<td  style="text-align:center;font-size:15px;"><?php echo $rows->date_time ?></td>
</tr>
<?php endforeach; ?>


	</BR>
	</td>
	</tr>
	</tbody>


	</div>
	</table>
	</div>
	</body>
  </head>
</html>
<?php include 'includes/footer.php'; ?>


