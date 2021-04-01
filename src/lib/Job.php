<?php 
	class Job{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		

		public function auth($data){
			$this->db->query("SELECT count(*) as c FROM user_login_details WHERE email = :email");

			$this->db->bind(':email',$data['email']);
			// $this->db->bind(':password',$data['password']);
			$res = $this->db->single();

			if($res->c)
			{
				return false;
			}
			else{
				return true;

			}
			


		}

		public function enter_user_creds($data){
			

			$this->db->query("INSERT INTO user_login_details (email, password) VALUES (:email, :password)");

			$this->db->bind(':email',$data['email']);
			$this->db->bind(':password',$data['password']);


			if($this->db->execute()){
				return true;
			}
			else {
				return false;
			}
		

		}

		public function auth2($data){
			$this->db->query("SELECT count(*) as c FROM user_login_details WHERE email = :email and password = :password");

			$this->db->bind(':email',$data['email']);
			$this->db->bind(':password',$data['password']);
			$res = $this->db->single();

			if($res->c == 1)
			{
				return 1;
			}
			else
			{
				$this->db->query("SELECT count(*) as c FROM user_login_details WHERE email = :email");
				$this->db->bind(':email',$data['email']);
				$res = $this->db->single();
				if($res->c == 1)
				{
					return 2;
				}
				else {
					return 3;

				}

				

			}
		}

		public function enter_cert_details($data){
			

			$this->db->query("INSERT INTO certification_details (employee_name, email, csp, certification_level, certification_name, certification_id, date_of_certification, expiry_date, validity, user_email, emp_no, certificate_link) VALUES (:employee_name, :email, :csp, :certification_level, :certification_name, :certification_id, :date_of_certification, :expiry_date, :validity, :user_email, :emp_no,:certificate_link)");

			$this->db->bind(':employee_name',$data['employee_name']);
			$this->db->bind(':email',$data['email']);
			$this->db->bind(':csp',$data['csp']);
			$this->db->bind(':certification_level',$data['certification_level']);
			$this->db->bind(':certification_name',$data['certification_name']);
			$this->db->bind(':certification_id',$data['certification_id']);
			$this->db->bind(':date_of_certification',$data['date_of_certification']);
			$this->db->bind(':expiry_date',$data['expiry_date']);
			$this->db->bind(':validity',$data['validity']);
			$this->db->bind(':user_email',$data['user_email']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$this->db->bind(':certificate_link',$data['certificate_link']);


			if($this->db->execute()){
				return true;
			}
			else {
				return false;
			}
		

		}

		public function get_csps(){
			$this->db->query("SELECT * FROM csp");

			// $this->db->bind(':email',$data['email']);
			// $this->db->bind(':password',$data['password']);
			$res = $this->db->resultSet();

			return $res;
			


		}

		public function getCsp_names(){
			$this->db->query("SELECT * FROM certification_names");
			// $this->db->bind(':csp_id',$data['csp_id']);

			
			$res = $this->db->resultSet();

			return $res;
			


		}

		public function getCertDetails($emp_no,$email){
			$this->db->query("SELECT * FROM certification_details WHERE emp_no = :emp_no and user_email = :user_email");

			$this->db->bind(':emp_no',$emp_no);
			$this->db->bind(':user_email',$email);


			
			$res = $this->db->resultSet();

			return $res;
			


		}

		public function authenticate_certification($data){
			$this->db->query("SELECT count(*) as c FROM certification_details WHERE certification_name = :certification_name and emp_no = :emp_no");

			$this->db->bind(':certification_name',$data['certification_name']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$res = $this->db->single();

			if($res->c)
			{
				return true;
			}
			else{
				return false;

			}
			


		}

		public function getDetails($data){
			$this->db->query("SELECT * FROM certification_details WHERE certification_name = :certification_name and emp_no = :emp_no and user_email = :user_email");

			$this->db->bind(':certification_name',$data['certification_name']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$this->db->bind(':user_email',$data['user_email']);
			
			$res = $this->db->resultSet();

			return $res;
			


		}

		public function getCertLink($data){
			$this->db->query("SELECT certificate_link FROM certification_details WHERE certification_name = :certification_name and emp_no = :emp_no and user_email = :user_email");

			$this->db->bind(':certification_name',$data['certification_name']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$this->db->bind(':user_email',$data['user_email']);
			
			$res = $this->db->single();

			return $res->certificate_link;
			


		}

		public function update_cert_details($data){
			

			$this->db->query("UPDATE certification_details SET employee_name = :employee_name, email=:email, csp = :csp, certification_level = :certification_level, certification_id = :certification_id, date_of_certification = :date_of_certification, expiry_date = :expiry_date, validity = :validity, user_email = :user_email, certificate_link= :certificate_link WHERE emp_no = :emp_no AND  certification_name = :certification_name");

			$this->db->bind(':employee_name',$data['employee_name']);
			$this->db->bind(':email',$data['email']);
			$this->db->bind(':csp',$data['csp']);
			$this->db->bind(':certification_level',$data['certification_level']);
			$this->db->bind(':certification_name',$data['certification_name']);
			$this->db->bind(':certification_id',$data['certification_id']);
			$this->db->bind(':date_of_certification',$data['date_of_certification']);
			$this->db->bind(':expiry_date',$data['expiry_date']);
			$this->db->bind(':validity',$data['validity']);
			$this->db->bind(':user_email',$data['user_email']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$this->db->bind(':certificate_link',$data['certificate_link']);


			if($this->db->execute()){
				return true;
			}
			else {
				return false;
			}
		

		}

		public function deleteRecord($data){
			$this->db->query("DELETE FROM certification_details WHERE certification_name = :certification_name and emp_no = :emp_no and user_email = :email");

			$this->db->bind(':certification_name',$data['cname']);
			$this->db->bind(':emp_no',$data['emp_no']);
			$this->db->bind(':email',$data['email']);

			$res = $this->db->execute();

			if($res)
			{
				return true;
			}
			else{
				return false;

			}
			


		}
		 public function forum_question($data){
		 	$this->db->query("INSERT INTO forum_question (topic, detail, name, email, date_time) VALUES (:topic, :detail, :name, :email, :date_time)");

		 	$this->db->bind(':topic',$data['topic']);
		 	$this->db->bind(':detail',$data['detail']);
		 	$this->db->bind(':name',$data['name']);
		 	$this->db->bind(':email',$data['email']);
		 	$this->db->bind(':date_time',$data['date_time']);

		 	$res = $this->db->execute();
            if($res)
		    {
		    return true;
		    }
            else 
            {
             return false;
            }
        }
        
        public function page_topic()
        {
        	$this->db->query("SELECT * FROM forum_question");
        	// $this->db->bind(':topic',$data['topic']);
        	// $this->db->bind(':view',$data['view']);
        	// $this->db->bind(':date_time',$data['date_time']);
        	$res=$this->db->resultSet();
        	return $res;

        }
		
		
		public function reply($id)
		{
            $this->db->query("SELECT * FROM forum_question WHERE topic_id= :topic_id");
  
            $this->db->bind(':topic_id',$id);
		 	// $this->db->bind(':detail',$data['detail']);
		 	// $this->db->bind(':name',$data['name']);
		 	// $this->db->bind(':email',$data['email']);
		 	// $this->db->bind(':date_time',$data['date_time']);

		 	$res=$this->db->resultSet();
        	return $res;
		}

		public function answerReply($id)
		{
             $this->db->query("SELECT * FROM forum_answer WHERE question_id=:id");
  
            $this->db->bind(':id',$id);
		 	// $this->db->bind(':detail',$data['detail']);
		 	// $this->db->bind(':name',$data['name']);
		 	// $this->db->bind(':email',$data['email']);
		 	// $this->db->bind(':date_time',$data['date_time']);

		 	$res=$this->db->resultSet();
        	return $res;
		}

		public function getViews($id)
		{
            $this->db->query("SELECT view FROM forum_question WHERE topic_id=:id");
  
            $this->db->bind(':id',$id);
		 	// $this->db->bind(':detail',$data['detail']);
		 	// $this->db->bind(':name',$data['name']);
		 	// $this->db->bind(':email',$data['email']);
		 	// $this->db->bind(':date_time',$data['date_time']);

		 	$res=$this->db->single();
        	return $res->view;
		}
		

		public function increaseViews($id,$v)
		{
            $this->db->query("UPDATE forum_question SET view=:v WHERE topic_id=:id");
  
            $this->db->bind(':id',$id);
		 	$this->db->bind(':v',$v);
		 	// $this->db->bind(':name',$data['name']);
		 	// $this->db->bind(':email',$data['email']);
		 	// $this->db->bind(':date_time',$data['date_time']);

		 	$res=$this->db->resultSet();
        	return $res;
		}

		public function forum_answer($data){
		 	$this->db->query("INSERT INTO forum_answer (question_id,a_id,a_name, a_email, a_answer, a_datetime) VALUES (:question_id,:a_id, :a_name, :a_email, :a_answer, :a_datetime)");

		 	$this->db->bind(':question_id',$data['question_id']);
		 	$this->db->bind(':a_id',$data['a_id']);
		 	$this->db->bind(':a_name',$data['a_name']);
		 	$this->db->bind(':a_email',$data['a_email']);
		 	$this->db->bind(':a_answer',$data['a_answer']);
		 	$this->db->bind(':a_datetime',$data['a_datetime']);

		 	$res = $this->db->execute();
            if($res)
		    {
		    return true;
		    }
            else 
            {
             return false;
            }
        }

        public function assign($id)
        {
        	$this->db->query("SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE question_id=:id");
        	$this->db->bind(':id',$id);
            $res=$this->db->single();
            return $res->Maxa_id;
        }

        public function ans($id,$r)
		{
			$this->db->query("UPDATE forum_question SET reply=:r WHERE topic_id=:id");
			$this->db->bind(':id',$id);
		 	$this->db->bind(':r',$r);
		 	$res=$this->db->resultSet();
        	return $res;
		}


	}