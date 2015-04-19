<?php
	//Start session
	session_start();
	
	
	//Connect to mysql server
	$con = mysqli_connect("localhost","840843","iicsdept","840843");
if (mysqli_connect_errno()) {
echo "MySQLi Connection was not established:" . mysqli_connect_error();
}
	$username = mysqli_real_escape_string($con, $_POST['iicsusername']);
$password = mysqli_real_escape_string($con, $_POST['iicspassword']);

if($username == '' && $password == '') {
  $_SESSION['SESS_ERROR'] = 'Please Enter Username and Password';

		header("location: login.php");
			exit();
}
		if($username == '') {
  $_SESSION['SESS_ERROR'] = 'Please Enter Username';

		header("location: login.php");
			exit();
}
if($password == '') {
  $_SESSION['SESS_ERROR'] = 'Please Enter Password';

		header("location: login.php");
			exit();
}
$sel_user = "SELECT * FROM administrator WHERE iicsusername='$username' AND iicspassword='$password'";
	$run_user = mysqli_query($con, $sel_user);
	$result = mysqli_num_rows($run_user);

	//Check whether the query was successful or not

	
		if($result == 1) {
			//Login Successful
  
			session_regenerate_id();
			$member = mysqli_fetch_assoc($run_user);
		 $_SESSION['SESS_IICS_NUMBER'] = $member['id'];
                        $_SESSION['SESS_IICS_FNAME'] = $member['iicsfirstname'];
                        $_SESSION['SESS_IICS_LNAME'] = $member['iicslastname'];
                        $_SESSION['SESS_IICS_MI'] = $member['iicsmi'];
                        $_SESSION['SESS_IICS_STAT'] = $member['status'];

		
		header("location: dashboard.php");
			exit();


		}
	
			if(mysqli_num_rows($run_user) == 0) {

	        $_SESSION['SESS_ERROR'] = 'Wrong password or username';

		header("location: login.php");
			exit();

		}
				

	else {

		  $_SESSION['SESS_ERROR'] = 'System Maintenance Please Try again Later';

		header("location:  https: login.php");
			exit();

	}
	
	
?>	