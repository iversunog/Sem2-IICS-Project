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
      <li><a href="dashboard.php">Course</a></li>
      <li><a href="subjects.php" >Subjects</a></li>
      <li><a href="tuition.php" class="current">Tuition</a></li>
      <li><a href="logout.php" >Logout</a></li>
    
    </ul>
  </div>
</div>
<table class="bordered">
    <thead>

    <tr>
 <th>Action</th>  
        <th>Tuition Code</th>       
      
         <th>Name</th>        
     <th>Fee</th>
<th>Category</th>
  <th>Sem Code</th>
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

$sql = "SELECT * FROM tuition";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<td><a href=deletefee.php?id=".$row['tid'].">DELETE</a></td>";
           echo "<td>" . $row["tuitioncode"]. "</td>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["fee"]. "</td>";
echo "<td>" . $row["category"]. "</td>";
        echo "<td>" . $row["semcode"]. "</td></tr>";
  
    }

} 
$conn->close();
?>


</table>
<br>
<form action="addtuition.php">
    <input type="submit" value="Add Fee">
</form>

</body>
</html>
												