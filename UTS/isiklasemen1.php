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

$sql = "INSERT INTO standings1 (rank, team, menang, kalah)
		VALUES ('1','Bucks','53','12'),
		('2','Raptors','46','18'),
		('3','Celtics','43','21'),
		('4','Heat','41','24'),
		('5','Pacers','39','26'),
		('6','76ers','39','26'),
		('7','Nets','30','34'),
		('8','Magic','30','35'),
		('9','Wizards','24','40'),
		('10','Hornets','23','42'),
		('11','Bulls','22','43'),
		('12','Knicks','21','45'),
		('13','Pistons','20','46'),
		('14','Hawks','20','47'),
		('15','Cavaliers','19','46')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>