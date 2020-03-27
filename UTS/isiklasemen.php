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

$sql = "INSERT INTO standings (rank, team, menang, kalah)
		VALUES ('1','Lakers','49','14'),
		('2','Clippers','44','20'),
		('3','Nuggets','43','22'),
		('4','Jazz','41','23'),
		('5','Thunder','40','24'),
		('6','Rockets','40','24'),
		('7','Mavericks','40','27'),
		('8','Grizzlies','32','33'),
		('9','Blazers','29','37'),
		('10','Pelicans','28','36'),
		('11','Kings','28','36'),
		('12','Spurs','27','36'),
		('13','Suns','26','39'),
		('14','Timberwolves','19','45'),
		('15','Warriors','15','50')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo"Error: " . $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
?>