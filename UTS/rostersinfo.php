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

$sql = "INSERT INTO rosters (no, player, pos, height, weight)
		VALUES ('11','Avery Bradley','PG','193'),
		('T2','Farid','farid@gmail.com','Farid Chilmi'),
		('T3','Sandi','sandi@gmail.com','Sandi Ragil')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>