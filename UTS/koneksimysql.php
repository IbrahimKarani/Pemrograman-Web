<!DOCTYPE html>
<html>
<head>
	<title>Western Conference Standings</title>
</head>
<body>
	<h3></h3>
	<?php
	$con = mysqli_connect("localhost","root","","myDB");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>