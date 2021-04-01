<?php 
include_once 'config/init.php';	
$job = new Job;
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){



	if(isset($_FILES["fname"])){

		if(isset($_FILES["fname"]) && $_FILES["fname"]["error"] == 0){

		    $allowed = array("xlsx" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		    $filename = $_FILES["fname"]["name"];
		    $filetype = $_FILES["fname"]["type"];
		    $filesize = $_FILES["fname"]["size"];

	    
	    // Verify MYME type of the file
	    	if(in_array($filetype, $allowed)){
	    		if(file_exists("uploads/" . $filename)){
	    			echo $filename . " is already exists.";
	    			} 
	    		else{

	            move_uploaded_file($_FILES["fname"]["tmp_name"], "uploads/" . $filename);
	            } 
	    
	    	}
	    	else{
	        // echo "Error: There was a problem uploading your file. Please try again."; 
	        reDirect('registration.php','There was a problem uploading your file. Please try again.', 'error');
	    	}
		} 
		else{
	    // echo "Error: " . $_FILES["fname"]["error"];
	    reDirect('registration.php',$_FILES["fname"]["error"], 'error');
		}

	$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

	$spreadsheet = $reader->load('./uploads/'.$filename);


	$sheetData = $spreadsheet->getActiveSheet()->toArray();


	unset($sheetData[0]);

	foreach ($sheetData as $t) {
		if(isset($t[0])){
			$data['emp_no'] = $t[0];
			$data['employee_name'] = $t[1];
			$data['email'] = $t[2];
			$data['csp'] = $t[3];
			$data['certification_level'] = $t[4];
			$data['certification_name'] = $t[5];
			$data['certification_id'] = $t[6];
			$data['date_of_certification'] = $t[7];
			$data['expiry_date'] = $t[8];
			$data['validity'] = $t[9];
			$data['user_email'] = $_SESSION['email'];
			$data['certificate_link'] = $t[10];

			if(!$job->authenticate_certification($data))
			{
				$job->enter_cert_details($data);
			}
		}

	}
	unlink("uploads/" . $filename);
	reDirect('uploadfile.php','Registered successfully!', 'success');
	}
	else
	{
		reDirect('uploadfile.php','Please choose file', 'error');
	}
}
else
{
	$template = new Template('templates/login-page.php');
	echo $template;

}





?>