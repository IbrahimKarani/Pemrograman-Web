<?php
//Create Connection
include 'koneksimysql.php';
//tampilkan tabel
$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1" width="">
	<thead>
		<th>ID</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Isi</th>
	</thead>
	<tbody>
		<?php
	while ($tampil = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td align=center>".$tampil['id_bt']."</td>";
		echo "<td align=center>".$tampil['nama']."</td>";
		echo "<td align=center>".$tampil['email']."</td>";
		echo "<td align=center>".$tampil['isi']."</td>";
		echo "</tr>";
	} 
		?>
	</tbody>
</table>

</body>
</html>