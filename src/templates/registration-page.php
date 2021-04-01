<?php include 'includes/header.php'; ?>

<title>Registration</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.body2 {margin-top: 16px;
   margin-bottom: 16px;
   }

input[type=text], select, textarea, input[type=date] , input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#re{
  padding: 11px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#container2 {
	margin-top: 16px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.msg{
	margin-top: 15px;
}
.spinner {
  position: fixed;
top: 48%;
left: 48%;
}

.spinner >div  {
  width: 18px;
  height: 18px;
  background-color: black;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
</style>
</head>

<body class="body2">
	<div class="msg">
		<?php displayMessage(); ?>
	</div>
	
<div class="container" id="container2">
		
 <form id="myform" action="registration.php" method="post" enctype="multipart/form-data">


	   <h1>Enter your Certification Details!</h1>
	   <br>

	   <label for="employeenumber"><b>Employee Number</b></label>
	   <input type="number" name="emp_no" required /><br /><br />

	   <label for="employeename"><b>Employee Name</b></label>
	   <input type="text" name="employee_name" required /><br /><br />

	   <label for="email"><b>Email</b></label>
	   <input type="email" name="email" required /><br /><br />

	   <label for="csp"><b>CSP</b></label><br />
	   <select id="csp" name="csp">
		   <option value="Aws">AWS</option>
		   <option value="Azure">Azure</option>
		   <option value="Gcp">GCP</option>
	   </select>

	   <label for="level"><b>Certification Level</b></label><br/>
	   <input type="text" name="certification_level">
       

	   <label for="cername"><b>Certification Name</b></label><br />
	   <select id="cername" name="certification_name">
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
	   </select>

	   <label for="ID"><b>Certification ID</b></label>
	   <input type="text" id="ID" name="certification_id" required />

	   <label for="date"><b>Date of Certification</b></label>
	   <input type="date" class="form-control" name="date_of_certification" required /><br /><br />

	   <label for="expire"><b>Expiry Date Of Certification</b></label>
	   <input type="date" class="form-control" name="expiry_date" required /><br /><br />

	   <label for="validity"><b>Validity</b></label>
	   <input type="number" class="form-control" id="number" name="validity" required /><br /><br />

	   <label for="cert_file"><b>Upload your certificate</b></label>
	   <input type="file" class="form-control" id="cert_file" name="cert_file" accept=".pdf" required /><br /><br />
	   
	   
	   <input type="submit" name="submit" value="submit" />
	   <!-- <input type="submit" name="cancel" value="cancel" /> -->
	   <a id="re" class="btn btn-danger" href="registration.php" role="button">cancel</a>
 </form>
 <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
           <div class="bounce3"></div>
        </div>
		<div class="content">
		<p align="center">loader</p>
	</div>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('.spinner').hide();
	  $("#myform").on("submit", function(){
	    $('.spinner').show();
	  });
});


    (function(d, m){
        var kommunicateSettings =
            {"appId":"93cc55227ab05c5fe305c32581e0ad03","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});

</script>
</div>


<?php include 'includes/footer.php'; ?>