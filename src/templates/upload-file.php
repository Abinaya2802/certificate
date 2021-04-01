
<?php include 'includes/header.php'; ?>

<style type="text/css">
.msg{
	margin-top: 15px;
}	
</style>

<div class="msg">
		<?php displayMessage(); ?>
	</div>
<div class="jumbotron container">
	<form action="read_file.php" method="post" enctype="multipart/form-data">
		<label for="fileupload"><strong id="info">Please choose your excel file to export data to Database</strong></label><br>
		<small>(Note: Your excel file should have values in following order emp_no, emp_name, email, csp, certification_level, certification_name, certification_id, date_of_certification, expiry date, validity, certification_link)</small><br><br>
		<input type="file" name="fname" required /><br><br>

		<input class="btn btn-success" type="submit" name="file_submit" value="submit" /><br>
	 	
	</form>
</div>


<?php include 'includes/footer.php'; ?>