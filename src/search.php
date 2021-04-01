<?php include_once 'config/init.php'; ?>

<?php 

	$job = new Job;

	if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){

		if(isset($_POST['emp_no']))
		{
			$res = $job->getCertDetails($_POST['emp_no'],$_SESSION['email']);
			
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
				
				
				foreach($res as $certification_details){
					$output = '<ul style="border: 1px solid black;" class="list-group">';

					$output .= '<li class="list-group-item"><strong class="strong">EMPLOYEE NUMBER:</strong>'.$certification_details->emp_no.'</li>';
			    	
			    	$output .= '<li class="list-group-item"><strong class="strong">EMPLOYEE NAME:</strong>'.$certification_details->employee_name.'</li>';

					$output .= '<li class="list-group-item"><strong class="strong">EMAIL:</strong>'.$certification_details->email.'</li>';


					$output .= '<li class="list-group-item"><strong class="strong">CSP:</strong>'.$certification_details->csp.'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">CERTIFICATION LEVEL:</strong>'.$certification_details->certification_level.'</li>';
					
					$output .= '<li class="list-group-item"><strong class="strong">CERTIFICATION NAME:</strong>'.$certification_details->certification_name.'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">CERTIFICATION ID:</strong>'.$certification_details->certification_id.'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">DATE OF CERTIFICATION:</strong>'.date("d-m-Y", strtotime($certification_details->date_of_certification)).'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">EXPIRY DATE:</strong>'.date("d-m-Y", strtotime($certification_details->expiry_date)).'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">VALIDITY:</strong>'.$certification_details->validity.'</li>';
					$output .= '<li class="list-group-item"><strong class="strong">Certificate</strong><a id="link" href="'.$certification_details->certificate_link.'"  target="_blank">Click here to view certificate</a></li>';

					$output .= '<li class="list-group-item"><a style="width: 100px; padding:10px;" href="search.php?emp_no='.$certification_details->emp_no.'&cname='.$certification_details->certification_name.'" class="bt btn-danger">Delete</a></li></ul><br>';
					echo $output;
					$output = '';
			    }
			    
			}

		}
		else if(isset($_GET['emp_no']) && isset($_GET['cname']))
		{
			$data = Array();
			$data['emp_no'] = $_GET['emp_no'];
			$data['cname'] = $_GET['cname'];
			$data['email'] = $_SESSION['email'];
			
			if($job->deleteRecord($data))
			{
				redirect('search.php','Deleted!','success');
			}
			else
			{
				redirect('search.php','Something went wrong!','error');

			}
			
			
		}
		else
		{
			$template = new Template('templates/search-page.php');
			// $template->csps = $job->get_csps();
			echo $template;
		}

		

	}
	else{
		
		$template = new Template('templates/login-page.php');
		echo $template;

	}





?>