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

$sql = "CREATE TABLE kontak (
		id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Nama VARCHAR(30) NOT NULL,
		jkel VARCHAR(10), Email VARCHAR(40), Alamat VARCHAR(50), Kota VARCHAR(20), Pesan text)";

if (mysqli_query($conn, $sql)) {
	echo "table created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>