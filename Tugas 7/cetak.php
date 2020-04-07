<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "myDB";

	include "koneksi.php";

	$sql = "SELECT * FROM kontak ORDER BY nama;";
	$query = mysqli_query($koneksi,$sql) or die ("Proses cetak gagal");
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Pesan</th>
			<th></th>
		</tr>";

		$no = 1;
		while ($hasil = mysqli_fetch_array($query)) {
			echo "<tr>";

			echo "<td>".$hasil['0']."</td>";
			echo "<td>".$hasil['1']."</td>";
			echo "<td>".$hasil['2']."</td>";
			echo "<td>".$hasil['3']."</td>";
			echo "<td>".$hasil['4']."</td>";
			echo "<td>".$hasil['5']."</td>";
			echo "<td>".$hasil['6']."</td>";
			
		
			$no++;
		}
		echo "</table>";

?>
<br>
<a href="login.php">Login</a>