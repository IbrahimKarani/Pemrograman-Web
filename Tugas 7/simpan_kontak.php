<?php
$username = "root";
$host = "localhost";
$password = "";

	$koneksi = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
	$db = mysqli_select_db($koneksi,"myDB") or die("Database tidak dapat dibuka"); 

	$vnama = $_POST['nama'];
	$vjkel = $_POST['jkel'];
	$vemail = $_POST['email'];
	$valamat = $_POST['alamat'];
	$vkota = $_POST['kota'];
	$vpesan = $_POST['pesan'];

	$sql = "insert into kontak set nama='$vnama',
							jkel='$vjkel',
							email='$vemail',
							alamat='$valamat',
							kota='$vkota',
							pesan='$vpesan'";
	mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
	mysqli_close(); header("location:kontak.html"); 
?>