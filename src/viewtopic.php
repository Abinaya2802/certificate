<?php include_once 'config/init.php'; ?>

<?php 

	$job = new Job;

	if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){
		if(isset($_GET['topic_id']))
		{			
			$template = new Template('templates/view_topic.php');
			$result = $job->reply($_GET['topic_id']);
			$template->res = $result;
			foreach($result as $r)
			$template->t_id =  $r->topic_id;

			$template->ansr= $job->answerReply($_GET['topic_id']);
			$view = $job->getViews($_GET['topic_id']);
			if(empty($view))
			{
				$job->increaseViews($_GET['topic_id'],1);
			}
			else
			{
				$job->increaseViews($_GET['topic_id'],$view+1);
			}
			
			echo $template;
		}
		

		

	}
	else{
		
		$template = new Template('templates/login-page.php');
		echo $template;

	}





?>