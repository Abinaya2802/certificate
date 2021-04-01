<?php include_once 'config/init.php'; ?>

<?php 

	$job = new Job;
	$template1 = new Template('templates/update_details.php');
	$template2 = new Template('templates/login-page.php');
	require 'vendor/autoload.php';

	use PhpOffice\PhpSpreadsheet\Spreadsheet;

	use PHPMailer\PHPMailer\PHPMailer;
	require_once 'PHPMailer-master/src/PHPMailer.php';
	require_once 'PHPMailer-master/src/SMTP.php';
	require_once 'PHPMailer-master/src/Exception.php';

	require 'vendor/autoload.php';

	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;

	if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){



		if(isset($_POST['emp_no1']))
		{
			$data = array();
			$data['emp_no'] = $_POST['emp_no1'];
			$data['certification_name'] = $_POST['certification_name'];
			$data['user_email'] = $_SESSION['email'];


			$res = $job->getDetails($data);

			if(empty($res))
			{
				$output = '<ul class="list-group">
				<li class="list-group-item"><strong class="strong">Not Found</strong></li> 
				</ul>
				';
				
				echo $output;
			}
			else
			{
				$template = new Template('templates/update-form.php');
				$template->details = $res;
				$template->csps = $job->get_csps();
				$template->cnames = $job->getCsp_names();
				echo $template;
			}
		

		}
		else if(isset($_POST['submit']))
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
			if(!isset($_FILES["cert_file"]))
			{
			$data['certificate_link'] = $job->getCertLink($data);
			}
			else if(isset($_FILES["cert_file"]) && $_FILES["cert_file"]["error"] == 0){

		    $allowed = array("pdf" => "application/pdf");
		    $filename = $_FILES["cert_file"]["name"];
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
	            $bucket = 'temp-temp-1209';
				$keyname = $filename;

				$credentials = new Aws\Credentials\Credentials('AKIA6Q7FZIZJ5FJUUQ5O', 'u8rSM0S6khK6fRtS7sg9SzXgzdpqtxXjSNS/6vDO');

				                        
				$s3 = new S3Client([
				    'version' => 'latest',
				    'region'  => 'us-east-1',
				    'credentials' => $credentials
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
				}
	            } 
	    
	    	}
	    	else{
	        // echo "Error: There was a problem uploading your file. Please try again."; 
	        reDirect('update_details.php','There was a problem uploading your file. Please try again.', 'error');
	    	}
			} 
			else{
	    echo "Error: " . $_FILES["fname"]["error"];
	    	// reDirect('registration.php',$_FILES["cert_file"]["error"], 'error');
			}

			
			if($job->update_cert_details($data))
			{
				
			    $sender = 'udr.notification@gmail.com';
				$senderName = 'UDR';

		// Replace recipient@example.com with a "To" address. If your account
		// is still in the sandbox, this address must be verified.
				$recipient = $_SESSION['email'];

		// Replace smtp_username with your Amazon SES SMTP user name.
				$usernameSmtp = 'AKIA6Q7FZIZJZLYHIRXP';

		// Replace smtp_password with your Amazon SES SMTP password.
				$passwordSmtp = 'BLm7O9L66nR1Px547gPzfa7U4fsaqOtlj5ZievocYrK5';

		// Specify a configuration set. If you do not want to use a configuration
		// set, comment or remove the next line.
		// $configurationSet = 'ConfigSet';

		// If you're using Amazon SES in a region other than US West (Oregon),
		// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
		// endpoint in the appropriate region.
				$host = 'email-smtp.us-east-1.amazonaws.com';
				$port = 587;

		// The subject line of the email
				$subject = 'Success!';

		// The plain-text body of the email
				$bodyText =  "Email Test\r\nThis email was sent through the Amazon SES SMTP interface using the PHPMailer class.";

		// The HTML-formatted body of the email
				$bodyHtml = '<h1>Your certification details are Updated successfully!</h1>
		    <p>Please <a href="ec2-54-221-33-22.compute-1.amazonaws.com/search.php">click here</a> to search to details</p>';

				$mail = new PHPMailer(true);

				try {
		    // Specify the SMTP settings.
		    		$mail->isSMTP();
		    		$mail->setFrom($sender, $senderName);
		    		$mail->Username   = $usernameSmtp;
		    		$mail->Password   = $passwordSmtp;
		    		$mail->Host       = $host;
		    		$mail->Port       = $port;
		    		$mail->SMTPAuth   = true;
		    		$mail->SMTPSecure = 'tls';
		    // $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

		    // Specify the message recipients.
		    		$mail->addAddress($recipient);
		    // You can also add CC, BCC, and additional To recipients here.

		    // Specify the content of the message.
		    		$mail->isHTML(true);
		    		$mail->Subject    = $subject;
		    		$mail->Body       = $bodyHtml;
		    		$mail->AltBody    = $bodyText;
		    		$mail->Send();
		    		echo "Email sent!" , PHP_EOL;
				} catch (phpmailerException $e) {
		    		echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
				} catch (Exception $e) {
		    		echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
				}
				reDirect("update.php","Updated Successfully!","success");
			}
			else 
			{
				reDirect("update.php","Something went wrong!","error");
			}

			// reDirect('update.php','Got data', 'success');

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