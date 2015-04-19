<?php
session_start(); 
$subjectcode = $_POST['subjectcode'];
$desc = $_POST['desc'];
$lec = $_POST['lec'];
$lab = $_POST['lab'];
$prereq = $_POST['prereq'];
$sem = $_POST['sem'];
if ($subjectcode ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addsubject.php");
			exit();
}

if ($desc ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addsubject.php");
			exit();
}
if ($lec ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addsubject.php");
			exit();
}
if ($lab ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addsubject.php");
			exit();
}
if ($sem ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addsubject.php");
			exit();
}
// Perform queries 
$con=mysqli_connect("localhost","840843","iicsdept","840843");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO subjects (subjectcode,subjectdesc,lec,lab,prereq,semcode) 
VALUES ('$subjectcode','$desc','$lec','$lab','$prereq','$sem')");
mysqli_close($con);
$_SESSION['SESS_SUCC'] = 'Subject Successfully Added!';
	header("location: addsubject.php");
			exit();
?>