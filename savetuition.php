<?php
session_start(); 
$tuitioncode = $_POST['tuitioncode'];
$name = $_POST['name'];
$fee = $_POST['fee'];
$cat= $_POST['cat'];
$sem = $_POST['sem'];

if ($tuitioncode ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addtuition.php");
			exit();
}

if ($name ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addtuition.php");
			exit();
}
if ($fee ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addtuition.php");
			exit();
}
if(!is_numeric($fee)){
$_SESSION['SESS_ERROR'] = 'Fee should be numeric!!';
	header("location: addtuition.php");
			exit();
}
if ($cat ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addtuition.php");
			exit();
}
if ($sem ==''){
$_SESSION['SESS_ERROR'] = 'Please Fill Up the Form!!';
	header("location: addtuition.php");
			exit();
}

// Perform queries 
$con=mysqli_connect("localhost","840843","iicsdept","840843");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO tuition (tuitioncode,name,fee,category,semcode) 
VALUES ('$tuitioncode','$name','$fee','$cat','$sem')");
mysqli_close($con);
$_SESSION['SESS_SUCC'] = 'Fee Successfully Added!';
	header("location: addtuition.php");
			exit();
?>