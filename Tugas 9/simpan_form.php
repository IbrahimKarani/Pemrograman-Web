<?php
$username = "root";
$host = "localhost";
$password = "";

	$koneksi = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
	$db = mysqli_select_db($koneksi,"myDB") or die("Database tidak dapat dibuka"); 

	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$nisn = $_POST['nisn'];
	$nik = $_POST['nik'];
	$templahir = $_POST['templahir'];
	$tglahir = $_POST['tglahir'];
	$akta = $_POST['akta'];
	$agama = $_POST['agama'];
	$kwn = $_POST['kwn'];
	$bk = $_POST['bk'];
	$alamat = $_POST['alamat'];
	$rt = $_POST['rt'];
	$rw = $_POST['rw'];
	$dusun = $_POST['dusun'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kodepos = $_POST['kodepos'];
	$lintang = $_POST['lintang'];
	$bujur = $_POST['bujur'];
	$tinggal = $_POST['tinggal'];
	$transport = $_POST['transport'];
	$kks = $_POST['kks'];
	$anak = $_POST['anak'];
	$kps = $_POST['kps'];
	$nokps = $_POST['nokps'];

	$sql = "insert into form set nama_lengkap='$nama',
							jk='$jk',
							nisn='$nisn',
							nik='$nik',
							templahir='$templahir',
							tglahir='$tglahir',
							akta='$akta',
							agama='$agama',
							kwn='$kwn',
							bk='$bk',
							alamat='$alamat',
							rt='$rt',
							rw='$rw',
							dusun='$dusun',
							kelurahan='$kelurahan',
							kecamatan='$kecamatan',
							kodepos='$kodepos',
							lintang='$lintang',
							bujur='$bujur',
							tinggal='$tinggal',
							transport='$transport',
							kks='$kks',
							anak='$anak',
							kps='$kps',
							nokps='$nokps'";
	mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
	mysqli_close(); header("location:tugas8.php"); 
?>