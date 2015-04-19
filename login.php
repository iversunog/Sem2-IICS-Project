<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login IICS Department</title>

	<!-- CSS -->
	<link rel="icon" type="image/png" href="/images/icon.png" sizes="32x32">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styleslogin.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
<center><img src="images/header.png"/></center>
		<?php session_start(); $error = $_SESSION['SESS_ERROR']; echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'><center>".$error."</div>"; unset($_SESSION['SESS_ERROR']);  ?>

		<form action="login-exec.php" method="post">
		
		
		
		<input type="name" autocomplete="off" placeholder="Username" name="iicsusername">
		
	
		
		<input type="password" autocomplete="off" placeholder="Password" name="iicspassword">
		
		<div id="lower">
		
		
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	