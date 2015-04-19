<?php

session_start();
unset($_SESSION['SESS_IICS_NUMBER']);
unset($_SESSION['SESS_IICS_FNAME']);
unset($_SESSION['SESS_IICS_LNAME']);
unset($_SESSION['SESS_IICS_MI']);
unset($_SESSION['SESS_IICS_STAT']);


session_destroy();
	header("location: login.php");
			exit();
?>