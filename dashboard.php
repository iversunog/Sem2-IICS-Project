<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IICS Administrator Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/adminstyles.css" type="text/css" />
<link href="css/styletable.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/png" href="/images/icon.png" sizes="32x32">
</head>
<body>
<h1>Administrator Account</h1>Welcome! Alcantara, Leonille C.
<hr />
<div id="menucase">
  <div id="stylefour">
    <ul>
      <li><a href="dashboard.php" class="current">Course</a></li>
      <li><a href="subjects.php">Subjects</a></li>
      <li><a href="tuition.php">Tuition</a></li>
      <li><a href="logout.php" >Logout</a></li>
    
    </ul>
  </div>
</div>
<table class="bordered">
    <thead>

    <tr>
        <th>Course Code</th>        
        <th>Course</th>
        <th>Description</th>
    </tr>
    </thead>
<tr>
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

$sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["coursecode"]. "</td>";
        echo "<td>" . $row["course"]. "</td>";
        echo "<td>" . $row["coursedesc"]. "</td></tr>";
    }

} 
$conn->close();
?>


</table>
<br>
<form action="addcourse.php">
    <input type="submit" value="Add Course">
</form>

</body>
</html>
