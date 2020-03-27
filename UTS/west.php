<?php
//Create Connection
include 'koneksimysql.php';
//tampilkan tabel
$sql = "SELECT * FROM standings";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Western Conference Standings</title>
	<link rel="stylesheet" type="text/css" href="west.css">
</head>
<body>
	<div class="tombol">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="Standings.php">Standings</a></li>
			</ul>
		</div>
	<h3 class="judul">WESTERN CONFERENCE</h3>
<div class="logo"><a href="home.php"><img src="nba.png"></a></div>
<table class="tabel" border="1" width="">
	<thead>
		<th width="100" height="50">Rank</th>
		<th width="200">Team</th>
		<th width="150">Menang</th>
		<th width="150">Kalah</th>
	</thead>
	<tbody>
		<?php
	while ($tampil = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td align=center>".$tampil['rank']."</td>";
		echo "<td align=center>".$tampil['team']."</td>";
		echo "<td align=center>".$tampil['menang']."</td>";
		echo "<td align=center>".$tampil['kalah']."</td>";
		echo "</tr>";
	} 
		?>
	</tbody>
</table>

</body>
</html>