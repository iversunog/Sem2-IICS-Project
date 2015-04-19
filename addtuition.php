<?php
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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IICS Administrator Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/adminstyles.css" type="text/css" />

<link rel="icon" type="image/png" href="/images/icon.png" sizes="32x32">
</head>
<body>
<h1>Administrator Account</h1>Welcome! Alcantara, Leonille C.
<hr />
<div id="menucase">
  <div id="stylefour">
    <ul>
      <li><a href="dashboard.php" >Course</a></li>
      <li><a href="subjects.php" >Subjects</a></li>
      <li><a href="tuition.php" class="current">Tuition</a></li>
      <li><a href="logout.php" >Logout</a></li>
    
    </ul>
  </div>
</div>
<a href="tuition.php"><img src="images/back.png" title="BACK"></a><br><br>

ADD COURSE<BR><BR>
<?php session_start(); 
$success= $_SESSION['SESS_SUCC']; 
$error= $_SESSION['SESS_ERROR']; 
echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#229cdc'><center>".$success."</div>"; 
echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'><center>".$error."</div>"; 
unset($_SESSION['SESS_ERROR']);  
unset($_SESSION['SESS_SUCC']);  ?>
<table>
<form action="savetuition.php" method="post">
<tr><td>TUITION CODE :</td><td><input type="text" name="tuitioncode" size="25"></td></tr>
<tr><td>NAME :</td><td><input type="text" name="name" size="25"></td></tr>
<tr><td>FEE :</td><td><input type="text" name="fee" size="25"></td></tr>
<tr><td>CATEGORY :</td><td>
<select name="cat">
<option>Tuition Fee</option>
<option>Miscellaneous Fee</option>
<option>Other Fee</option>
<option>Additional Fee</option>
<option>Additional IF APL Fee</option>
<option>ROTC Fee</option>
<option>OOS Fee</option>

</select>
<tr><td>SEMESTER :</td><td>
<select name="sem">
<?php
$conni = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conni->connect_error) {
    die("Connection failed: " . $conni->connect_error);
} 
	$sqli = "SELECT * FROM semester ORDER BY semcode";
$resulti = $conni->query($sqli);

if ($resulti->num_rows > 0) {
    // output data of each row
    while($rowi = $resulti->fetch_assoc()) {

        echo "<option>" . $rowi["semcode"]. "</option>";
       

    }

} 
$conn->close();
?>
</select>
</td></tr>
<tr><td></td><td align="right"><input type="submit" value="Submit"></td></tr>
</form>
</table>
</body>
</html>	