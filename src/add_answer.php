<?php include_once 'config/init.php'; ?>

<?php 

  $job = new Job;

  if(isset($_SESSION['logged_in_UDR']) && $_SESSION['logged_in_UDR']){
    if(isset($_POST['Submit']))
    {     
      $data = array();
      $data['question_id'] = $_POST['qid'];
      $m_id = $job->assign($_POST['id']);
      if($m_id)
      {
        $m_id = 1;

      }
      else
      {
        $m_id = $m_id + 1;
      }
      $data['a_name']=$_POST['a_name'];
      $data['a_email']=$_POST['a_email'];
      $data['a_answer']=$_POST['a_answer'];
      $data['a_id']=$m_id;

      $data['a_datetime']=date('Y-m-d H:i:s');
      $job->forum_answer($data);
      $job->ans($data['question_id'],$m_id);
     
      // $template = Template("templates/view_topic.php");
      reDirect('mainforum.php','Replied Successfully','success');

    }

    

  }
  else{
    
    $template = new Template('templates/login-page.php');
    echo $template;

  }





?>