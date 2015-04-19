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
      <li><a href="dashboard.php" class="current">Course</a></li>
      <li><a href="subjects.php">Subjects</a></li>
      <li><a href="tuition.php">Tuition</a></li>
      <li><a href="logout.php" >Logout</a></li>
    
    </ul>
  </div>
</div>
<a href="dashboard.php"><img src="images/back.png" title="BACK"></a><br><br>

ADD COURSE<BR><BR>
<?php session_start(); 
$success= $_SESSION['SESS_SUCC']; 
$error= $_SESSION['SESS_ERROR']; 
echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#229cdc'><center>".$success."</div>"; 
echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'><center>".$error."</div>"; 
unset($_SESSION['SESS_ERROR']);  
unset($_SESSION['SESS_SUCC']);  ?>
<table>
<form action="savecourse.php" method="post">
<tr><td>COURSE CODE :</td><td><input type="text" name="coursecode" size="25"></td></tr>
<tr><td>COURSE :</td><td><input type="text" name="course" size="25"></td></tr>
<tr><td>DESCRIPTION :</td><td><textarea name="coursedesc" rows="5" cols="27" ></textarea></td></tr>
<tr><td></td><td align="right"><input type="submit" value="Submit"></td></tr>
</form>
</table>
</body>
</html>