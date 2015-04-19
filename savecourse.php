<?php
session_start(); 
$coursecode = $_POST['coursecode'];
$course = $_POST['course'];
$desc = $_POST['coursedesc'];


if ($coursecode ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addcourse.php");
			exit();
}

if ($course ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addcourse.php");
			exit();
}
if ($desc ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addcourse.php");
			exit();
}
// Perform queries 
$con=mysqli_connect("localhost","840843","iicsdept","840843");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO course (coursecode,course,coursedesc) 
VALUES ('$coursecode','$course','$desc')");
mysqli_close($con);
$_SESSION['SESS_SUCC'] = 'Successfully Added!';
	header("location: addcourse.php");
			exit();
?>