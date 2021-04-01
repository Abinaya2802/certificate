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
	#msg{
	margin-top: 15px;
}

	


</style>

<div id="msg">
		<?php displayMessage(); ?>
</div>
<div style="margin-top: 16px;" class="jumbotron w-100 p-3" >
        <h1 style="text-align: center;">Search your certification details!</h1>
        <form id="search">

        	
    		<div style="text-align: center;">
    			<label for="employeenumber"><b>Enter Employee Number</b></label>
    			<div id="emp_no">
	    			
	   				<input style="width:300px;border: 1px solid black" type="number" class="form-control" id="empn" name="emp_no" required /><br>
	            </div>

	          <input style="padding: 20px;" id="submit" type="submit" class="btn btn-lg btn-success" value="Search">
	        </div>
	       
        </form>
</div>

<div id="output">
	
</div>

	
<br>

<script>
    
    $(document).ready(function(){


       

      $('form').submit(function(){
        var temp = $('#empn').val();

        // $( "#sample" ).text(name);
	        $.ajax({
	          url: "search.php",
	          method: "POST",
	          data: {
	            emp_no: temp
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