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
									<li><a href="cssummer.php">CS Summer</a></li>
									<li><a href="4thcs.php">4th Year CS Curriculum</a></li>
								</ul>
								</li>
								<li><a href="is.html">IS</a>
								<ul>
									<li><a href="1stis.php">1st Year IS Curriculum</a></li>
									<li><a href="2ndis.php">2nd Year IS Curriculum</a></li>
									<li><a href="issummer1.php">IS Summer</a></li>
									<li><a href="3rdis.php">3rd Year IS Curriculum</a></li>
									<li><a href="issummer2.php">IS Summer</a></li>
									<li><a href="4this.php">4th Year IS Curriculum</a></li>
								</ul>
								
								</li>
								<li ><a href="it.html">IT</a>
								<ul>
									<li><a href="1stit.php">1st Year IT Curriculum</a></li>
									<li><a href="2ndit.php">2nd Year IT Curriculum</a></li>
									<li><a href="itsummer1.php">IT Summer</a></li>
									<li><a href="3rdit.php">3rd Year IT Curriculum</a></li>
									<li><a href="itsummer2.php">IT Summer</a></li>
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
								<h2>2nd Year IS</h2>
							</header>
							<header>
								<h2>SEMESTER 1</h2>
							</header>
<a href="tuitionfees.php" class="button icon fa-file-text">VIEW TUITION</a><p>
<table>
<tr>
							<th>SUBJECT</th>
							<th>DESCRIPTION</th>
							<th>LEC</th>
							<th>LAB</th>
							<th>PRE-REQUISITE</th>
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

$sql = "SELECT * FROM subjects where semcode='ISY2SEM001' ORDER BY subjectcode";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["subjectcode"]. "</td>";
        echo "<td>" . $row["subjectdesc"]. "</td>";
        echo "<td><center>" . $row["lec"]. "</center></td>";
        echo "<td><center>" . $row["lab"]. "</center></td>";
        echo "<td>" . $row["prereq"]. "</td></tr>";

    }

} 
$conn->close();
?>


</table>
	
							<HR>
							
								<header>
									<h2>SEMESTER 2</h2>
								</header>
<a href="tuitionfees.php" class="button icon fa-file-text">VIEW TUITION</a><p>
								<table>
<tr>
							<th>SUBJECT</th>
							<th>DESCRIPTION</th>
							<th>LEC</th>
							<th>LAB</th>
							<th>PRE-REQUISITE</th>
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

$sql = "SELECT * FROM subjects where semcode='ISY2SEM002' ORDER BY subjectcode";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["subjectcode"]. "</td>";
        echo "<td>" . $row["subjectdesc"]. "</td>";
        echo "<td><center>" . $row["lec"]. "</center></td>";
        echo "<td><center>" . $row["lab"]. "</center></td>";
        echo "<td>" . $row["prereq"]. "</td></tr>";

    }

} 
$conn->close();
?>


</table>
                                                                <center><table style="border-style:hidden;"><tr>
								<footer>
								<center><ul class="actions">
									<td style="border-style:hidden;"><a href="1stis.php" class="button big">1st year IS Curriculum</a></td>
									<td style="border-style:hidden;"><a href="2ndis.php" class="button big">2nd year IS Curriculum</a></td></tr>
                                                                         <tr><td style="border-style:hidden;"><a href="3rdis.php" class="button big">3rd year IS Curriculum</a></td>
									<td style="border-style:hidden;"><a href="4this.php" class="button big">4th year IS Curriculum</a></td>
								</ul></center>
							</footer></td></tr></table></center>
							
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