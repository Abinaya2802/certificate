<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Topic</title>
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
  
      

<div class="container" style="margin-top:30px;">

	<div >

  			<b><h3 style="text-align:center;font-family: timesnewroman;">Topic of discussion</h3></b>

	</div>
	<h1></h1>
	<?php foreach($res as $r): ?>
	<div class="card card-header" style="font-family: timesnewroman;padding-top:5px;">

		<?php echo '<h5><B>'.$r->topic.'</h5></B><BR>'; ?>
		
	</div>

	
	    <div >
		    <div class="card bg-success text-white" style="text-align:left;word-wrap:break-word;margin-top:5px;padding-left:10px;">

		    	<?php echo '<b>By : '.$r->name.'</b><br>'; ?>
		    	<?php echo '<b>Email : '.$r->email.'</b>'; ?>

		    	<div  style="text-align:right">
		    	
		    		<?php echo '<b>'.$r->date_time.'</b>'; ?>
		    		
		    	</div>
		    	
		    </div>
		    
		    <div class="card" style="word-wrap:break-word;height:10rem;margin-top:5px;font-family: timesnewroman;font-size:20px;padding-left:10px;"><?php echo $r->detail; ?></div>
		</div>
<?php endforeach; ?>
	
</div>
<hr>
<div >

  	<b><h3 style="text-align:left;margin-left:70px;font-family: timesnewroman;">Replies</h3></b>

</div>


<BR>

<?php foreach($ansr as $a): ?>

<div class="container">
   <div class="card "style="margin-bottom:7px;">

	<div class="card col-md-4 bg-success text-white">

		<div class="well well-lg">
			#:<?php echo $a->a_id; ?><br>
			Name:<?php echo $a->a_name; ?><br>
			Email:<?php echo $a->a_email; ?><br>
			Date/Time:<?php echo $a->a_datetime; ?>

		</div>
		
	</div>

	<div class=" card-header " style="word-wrap:break-word;height:5rem;font-family: timesnewroman;font-size:20px;">		
			<?php echo $a->a_answer; ?>
	</div>
	
  </div>
 </div>
<?php endforeach; ?>
<hr><br>

 



<BR>

<div class="container">
	

<form method="post" action="add_answer.php">

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="f_name" style="font-family: timesnewroman;font-size:20px;">Name</label>
								<input type="text" style="font-size: 15px;color:black;" placeholder="Enter your Name.."  name="a_name" id="a_name" class="form-control">
							</div>
							
	</div>

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_email" style="font-family: timesnewroman;font-size:20px;">Email</label>
								<input type="text" style="font-size: 15px;color:black;" placeholder="Enter your email.."  name="a_email" id="a_email" class="form-control">
							</div>
							
	</div>	

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_answer" style="font-family: timesnewroman;font-size:20px;">Answer</label>
								<textarea rows="5" style="font-size: 15px;color:black;" placeholder="Enter your reply.."  name="a_answer" id="a_answer" class="form-control"></textarea>
							</div>
							
	</div>	
	<div class="row">
					<input type="hidden" name="qid" value="<?php echo $t_id; ?>">
					<div  style="padding-left: 20px;">
              						<input type="submit" name="Submit" value="SUBMIT" class="btn btn-md btn-primary btn-block">
          			</div>		
	</div>

	<br><br><hr>		
		
		<tr>
			<td>&nbsp;</td>
			<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
			<!--<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>-->
		</tr>
		
	</td>
</form>

</div>

 

