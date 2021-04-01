<?php 

	include_once 'config/init.php';
	
	
	$job = new Job;
	$template1 = new Template('templates/registration-page.php');
	$template2 = new Template('templates/login-page.php');


	

	
	require 'vendor/autoload.php';

	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	use Aws\Ses\SesClient;
	use Aws\Exception\AwsException;



	
	if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){
		
		 	
		$data = array();
		
		if(isset($_POST['submit']))
		{

			$data['emp_no'] = $_POST['emp_no'];	
			$data['employee_name'] = $_POST['employee_name'];
			$data['email'] = $_POST['email'];
			$data['csp'] = $_POST['csp'];
			$data['certification_level'] = $_POST['certification_level'];
			$data['certification_name'] = $_POST['certification_name'];
			$data['certification_id'] = $_POST['certification_id'];
			$data['date_of_certification'] = $_POST['date_of_certification'];
			$data['expiry_date'] = $_POST['expiry_date'];
			$data['validity'] = $_POST['validity'];
			$data['user_email'] = $_SESSION['email'];
			$data['certificate_link'] = '';

			if($job->authenticate_certification($data))
			{
				reDirect("registration.php","Already Registered!","error");


			}
			if(isset($_FILES["cert_file"]) && $_FILES["cert_file"]["error"] == 0){

		    $allowed = array("xlsx" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","pdf" => "application/pdf");
		    // $filename = str_replace(' ', '',$_FILES["cert_file"]["name"]);
		    $filename = md5(rand()).'.pdf';
		    $filetype = $_FILES["cert_file"]["type"];
		    $filesize = $_FILES["cert_file"]["size"];

	    
	    // Verify MYME type of the file
	    	if(in_array($filetype, $allowed)){
	    		if(file_exists("uploads/" . $filename)){
	    			echo $filename . " is already exists.";
	    			} 
	    		else{

	            move_uploaded_file($_FILES["cert_file"]["tmp_name"], "uploads/" . $filename);
	            // reDirect('registration.php','Uploaded', 'success');
	            } 
	    
	    	}
	    	else{
	        // echo "Error: There was a problem uploading your file. Please try again."; 
	        reDirect('registration.php','There was a problem uploading your file. Please try again.', 'error');
	    	}
			} 
			else{
	    // echo "Error: " . $_FILES["fname"]["error"];
	    	reDirect('registration.php',$_FILES["cert_file"]["error"], 'error');
			}

			$bucket = 'temporary-bucket-1100';
			
			$keyname = $filename;


			                        
			$s3 = new S3Client([
			    'version' => 'latest',
			    'region'  => 'us-east-1',

			]);

			try {
			    // Upload data.
			    $result = $s3->putObject([
			        'Bucket' => $bucket,
			        'Key'    => $keyname,
			        'SourceFile' => './uploads/'.$filename,
			        'ACL'    => 'public-read'
			    ]);

			    // Print the URL to the object.
			    $data['certificate_link'] = $result['ObjectURL'];
			    echo basename($result['ObjectURL']) . PHP_EOL;
			} catch (S3Exception $e) {
			    echo $e->getMessage() . PHP_EOL;
			    reDirect('registration.php',$e->getMessage() . PHP_EOL,'error');
			}

			if($job->enter_cert_details($data))
			{
				
			    
				$SesClient = new SesClient([
			    'version' => '2010-12-01',
			    'region'  => 'us-east-1'
			]);

		
			$sender_email = 'udr.notification@gmail.com';

			$recipient_emails = [strval($_SESSION['email'])];


			$subject = 'Your details are successfully registered!';
			$plaintext_body = '' ;
			$html_body =  '<h1>Your certification details are registered successfully!</h1>
					    <p>Please <a href="http://knackcloud.cf/search.php">click here</a> to search to details</p>';
			$char_set = 'UTF-8';

			try {
			    $result = $SesClient->sendEmail([
			        'Destination' => [
			            'ToAddresses' => $recipient_emails,
			        ],
			        'ReplyToAddresses' => [$sender_email],
			        'Source' => $sender_email,
			        'Message' => [
			          'Body' => [
			              'Html' => [
			                  'Charset' => $char_set,
			                  'Data' => $html_body,
			              ],
			              'Text' => [
			                  'Charset' => $char_set,
			                  'Data' => $plaintext_body,
			              ],
			          ],
			          'Subject' => [
			              'Charset' => $char_set,
			              'Data' => $subject,
			          ],
			        ],
			        
			    ]);
			    $messageId = $result['MessageId'];
			    echo("Email sent! Message ID: $messageId"."\n");
			} catch (AwsException $e) {
			    // output error message if fails
			    echo $e->getMessage();
			    echo("The email was not sent. Error message: ".$e->getAwsErrorMessage()."\n");
			    echo "\n";
			}
				unlink("uploads/" . $filename);
				reDirect("registration.php","Registered Successfully!","success");
			}
			else 
			{
				reDirect("registration.php","Something went wrong!","error");
			}
			
		}
		else 
		{
			
			echo $template1;
		}
	}
	else{
		
		// $template = new Template('templates/login-page.php');
		echo $template2;

	}





?>