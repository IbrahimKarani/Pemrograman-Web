<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed : " . mysqli_connect_error());
}

$sql = "CREATE TABLE rosters (
		no INT(10) SIGNED AUTO_INCREMENT PRIMARY KEY, player VARCHAR(200) NOT NULL, pos VARCHAR(50) NOT NULL, height VARCHAR(3) NOT NULL, weight VARCHAR (3) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "table created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>