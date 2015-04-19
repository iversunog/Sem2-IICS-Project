<?php
session_start(); 
$id = $_GET['id'];
$servername = "localhost";
$username = "840843";
$password = "iicsdept";
$dbname = "840843";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tuition WHERE tid='$id'";

if ($conn->query($sql) === TRUE) {
   
$_SESSION['SESS_SUCC'] = 'Record deleted successfully '.$id;
header("location: tuition.php");
			exit();
} else {
   
$_SESSION['SESS_ERROR'] = 'Error';
header("location: tuition.php");
			exit();

}

$conn->close();
?>