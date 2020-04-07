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

$sql = "CREATE TABLE login (
		username VARCHAR(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		password VARCHAR(30) NOT NULL,)";

if (mysqli_query($conn, $sql)) {
	echo "table created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>