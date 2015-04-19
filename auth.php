<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_IICS_NUMBER and SESS_IICS_FNAME  is present or not
	if((trim($_SESSION['SESS_IICS_NUMBER']) == '' OR $_SESSION['SESS_IICS_FNAME'] == '')) {
unset($_SESSION['SESS_IICS_NUMBER']);
  unset($_SESSION['SESS_IICS_FNAME']);
 unset($_SESSION['SESS_IICS_LNAME']);
 unset($_SESSION['SESS_IICS_MI']);
 unset($_SESSION['SESS_IICS_STAT']);
		header("location: login.php");
		exit();
	}
		



?>