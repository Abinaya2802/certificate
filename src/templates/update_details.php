<?php include 'includes/header.php'; ?>


<style type="text/css">

	.strong {
		font-weight: 900;
		display:inline-block;
		text-align: left;
		width: 200px;
	}
	#emp_no{
		/*border: 1px solid black;*/
		text-align: center;
		padding-left: 400px;
	}
	#link{
		display: inline;
	  color: black;
	  text-align: center;
	  padding: 0px;
	  text-decoration: none;
	}
	#link:hover{
		
  background-color: white;

	}
	

	.msg{
	margin-top: 15px;
}	


</style>

<div class="msg">
		<?php displayMessage(); ?>
	</div>
<div style="margin-top: 16px;" class="jumbotron w-100 p-3" >
        <h1 style="text-align: center;">Update your certification details!</h1>
        <form id="search">

        	
    		<div style="text-align: center;">
    			<label for="employeenumber"><b>Enter Employee Number</b></label>
    			<div id="emp_no">
	    			
	   				<input style="width:300px;border: 1px solid black" type="number" class="form-control" id="empn" name="emp_no" required /><br>
	            
	            <select class="form-control" style="width:300px;border: 1px solid black" id="c_name">
	            	<option value="AWS Certified Solution Architect Associate">AWS Certified Solution Architect Associate</option>
				    <option value="AWS Certified Solution Architect Professional">AWS Certified Solution Architect Professional</option>
				    <option value="AWS Certified Developer Associate">AWS Certified Developer Associate</option>
				    <option value="AWS Certified Developer Professional">AWS Certified Developer Professional</option>
					<option value="AWS Certified Cloud Practioner">AWS Certified Cloud Practioner</option>
					<option value="AWS Certified BigData Analytics">AWS Certified BigData Analytics </option>
					<option value="AWS Certified Database Specialist">AWS Certified Database Specialist </option>
					<option value="AWS Certified Devops Engineer">AWS Certified Devops Engineer</option>
					<option value="Microsoft Certified Azure Fundamentals">Microsoft Certified Azure Fundamentals</option>
					<option value="Microsoft Certified Azure Data Fundamentals">Microsoft Certified Azure Data Fundamentals</option>
					<option value="Microsoft Certified Azure AI Fundamentals">Microsoft Certified Azure AI Fundamentals</option>
					<option value="Microsoft Certified Azure Administrator Associate">Microsoft Certified Azure Administrator Associate</option>
					<option value="Microsoft Certified Azure Developer Associate">Microsoft Certified Azure Developer Associate</option>
					<option value="Microsoft Certified Azure Database Administrator Associate">Microsoft Certified Azure Database Administrator Associate</option>
					<option value="Microsoft Certified Azure Solutions Architect Expert">Microsoft Certified Azure Solutions Architect Expert</option>
					<option value=">Microsoft Certified DevOps Engineer Expert">Microsoft Certified DevOps Engineer Expert</option>
					<option value="GCP Certified Engineer Associate">GCP Certified Engineer Associate</option>
					<option value="GCP Certified Architect Professional">GCP Certified Architect Professional</option>
					<option value="CP Certified Developer Professional">GCP Certified Developer Professional</option>
					<option value="GCP Certified Data Engineer Professional">GCP Certified Data Engineer Professional</option>
					<option value="GCP Certified DevOps Engineer Professional">GCP Certified DevOps Engineer Professional</option>
					<option value="GCP Certified Security Engineer Professional">GCP Certified Security Engineer Professional</option>
					<option value="GCP Certified Network Engineer Professional">GCP Certified Network Engineer Professional</option>
					<option value="GCP Certified Machine Learning Engineer Professional">GCP Certified Machine Learning Engineer Professional</option>
	            </select><br>
	            </div>

	          <input style="padding: 20px;" id="submit" type="submit" class="btn btn-lg btn-success" value="Get">
	        </div>
	       
        </form>
</div>

<div id="output">
	
</div>

	
<br>

<script>
    
    $(document).ready(function(){


       

      $('form').submit(function(){
        var temp1 = $('#empn').val();
        var temp2 = $('#c_name').val();

        // $( "#sample" ).text(name);
	        $.ajax({
	          url: "update.php",
	          method: "POST",
	          data: {
	            emp_no1	: temp1,
	            certification_name: temp2
	            },
	          success: function( result ) {

	            $( "#output" ).html(result);
	            console.log(result);
	           
	          }
	        });
	       
	       return false;
        }); 

    });


</script>

<?php include 'includes/footer.php'; ?>

