
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.body2 {margin-top: 16px;
   margin-bottom: 16px;
   }

input[type=text], select, textarea, input[type=date] , input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#re{
  padding: 11px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#container2 {
	margin-top: 16px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
#msg{
	margin-top: 15px;
}
</style>
</head>

<body class="body2">
	<div id="msg">
		<?php displayMessage(); ?>
	</div>
	
<div class="container" id="container2">
		
 <form action="update.php" method="post" enctype="multipart/form-data">


	   <h1>Update your Certification Details!</h1>
	   <br>
	   <?php foreach ($details as $d): ?>
	   <label for="employeenumber"><b>Employee Number</b></label>
	   <input type="number" name="emp_no" value="<?php echo $d->emp_no;?>" required readonly/><br /><br />

	   <label for="employeename"><b>Employee Name</b></label>
	   <input type="text" name="employee_name" value="<?php echo $d->employee_name;?>" required /><br /><br />

	   <label for="email"><b>Email</b></label>
	   <input type="email" name="email" value="<?php echo $d->email;?>" required /><br /><br />

	   <label for="csp"><b>CSP</b></label><br />
	   <select id="csp" name="csp">

		   <option value="">Select Csp</option>
	        <?php foreach ($csps as $csp): ?>
	        	<?php if(strtolower($csp->csp_name) == strtolower($d->csp)): ?>
	        		<option value="<?php echo $csp->csp_name; ?>" selected><?php echo $csp->csp_name; ?></option>

	        	<?php else: ?>
	        		<option value="<?php echo $csp->csp_name; ?>"><?php echo $csp->csp_name; ?></option>
	        	<?php endif; ?>
	        <?php endforeach; ?>
	   </select>

	   <label for="level"><b>Certification Level</b></label><br/>
	   <input type="text" name="certification_level" value="<?php echo $d->certification_level;?>">
       

	   <label for="cername"><b>Certification Name</b></label><br />
	   <select id="cername" name="certification_name" readonly>
	   		<?php foreach ($cnames as $cname): ?>
	        	<?php if(strtolower($cname->certification_name) == strtolower($d->certification_name)): ?>
	        		<option value="<?php echo $cname->certification_name; ?>" selected><?php echo $cname->certification_name; ?></option>

	        	<?php else: ?>
	        		<option value="<?php echo $cname->certification_name; ?>"><?php echo $cname->certification_name; ?></option>
	        	<?php endif; ?>
	        <?php endforeach; ?>
	   </select>

	   <label for="ID"><b>Certification ID</b></label>
	   <input type="text" id="ID" name="certification_id" value="<?php echo $d->certification_id;?>" required />

	   <label for="date"><b>Date of Certification</b></label>
	   <input type="date" class="form-control" name="date_of_certification" value="<?php echo $d->date_of_certification;?>" required /><br /><br />

	   <label for="expire"><b>Expiry Date Of Certification</b></label>
	   <input type="date" class="form-control" value="<?php echo $d->expiry_date;?>" name="expiry_date" required /><br /><br />

	   <label for="validity"><b>Validity</b></label>
	   <input type="number" class="form-control" id="number" name="validity" value="<?php echo $d->validity;?>" required /><br /><br />

	   <label for="cert_file"><b>Uploaded certificate</b></label>
	   <a class="form-control" href="<?php echo $d->certificate_link;?>" target="_blank" >Click here to view certificate</a> <br /><br />

	   <label for="cert_file"><b>Re-Upload your certificate</b></label>
	   <input type="file" class="form-control" id="cert_file" name="cert_file" accept=".pdf"/><br /><br />
	   
	   <?php endforeach; ?>
	   <input type="submit" name="submit" value="submit" />
	   <!-- <input type="submit" name="cancel" value="cancel" /> -->
	   <a id="re" class="btn btn-danger" href="registration.php" role="button">cancel</a>
 </form>
</div>
<script type="text/javascript">
	$(document).ready(function(){


       
$("#cername").mousedown(function(e){

     e.preventDefault();
    
  
});

    });

</script>


