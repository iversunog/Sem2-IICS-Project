<!DOCTYPE HTML>
<html>
	<head>
		<title>UST IICS Department</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="/images/icon.png" sizes="32x32">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<style>
table, th, td {
    border: 1px solid black;
}
</style>
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header">
					
					<!-- Logo -->
					<h1><a href="index.html"><img src="images/logo.png" width="80" height="75" alt="" />UST IICS Department</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li ><a href="cs.html">CS</a>
								<ul>
									<li><a href="1stcs.php">1st Year CS Curriculum</a></li>
									<li><a href="2ndcs.php">2nd Year CS Curriculum</a></li>
									<li><a href="3rdcs.php">3rd Year CS Curriculum</a></li>
									<li><a href="4thcs.php">4th Year CS Curriculum</a></li>
								</ul>
								</li>
								<li><a href="is.html">IS</a>
								<ul>
									<li><a href="1stis.php">1st Year IS Curriculum</a></li>
									<li><a href="2ndis.php">2nd Year IS Curriculum</a></li>
									<li><a href="3rdis.php">3rd Year IS Curriculum</a></li>
									<li><a href="4this.php">4th Year IS Curriculum</a></li>
								</ul>
								
								</li>
								<li ><a href="it.html">IT</a>
								<ul>
									<li><a href="1stit.php">1st Year IT Curriculum</a></li>
									<li><a href="2ndit.php">2nd Year IT Curriculum</a></li>
									<li><a href="3rdit.php">3rd Year IT Curriculum</a></li>
									<li><a href="4thit.php">4th Year IT Curriculum</a></li>
								</ul>
								
								</li>
							</ul>
						</nav>
				
				</div>
			</div>
		
		
			<div id="main-wrapper">
				<div class="container">
											
			
						<article class="box post">
							
							<header>
								<h2>TUITION</h2>
							</header>
<table>
<tr>
							<th>Name</th>
							<th>Fee</th>
							
							</tr><tr>
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

$sql = "SELECT * FROM tuition ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["name"]. "</td>";
      
        echo "<td><center>" . $row["fee"]. "</center></td></tr>";

    }

} 
$conn->close();
?>


</table>
	
							
						</article>

				</div>
			</div>

	

					<div class="row">
						<div class="12u">
						
							<!-- Copyright -->
								<div id="copyright">
									<ul class="links">
										<table cellspacing="10"><tr><td><a href="http://www.ust.edu.ph/">UST Website </a></td><td>&nbsp;&nbsp;&nbsp;</td><td><a href="http://www.ust.edu.ph/admission/overview/"> Contact Info</a></td></tr></table>
									</ul>
								</div>

						</div>
					</div>
				</section>
			</div>

	</body>
</html>					