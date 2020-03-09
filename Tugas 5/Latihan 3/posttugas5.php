<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<header><center>BIODATA</center></header>
	<br>
	<br>
	<style type="text/css">
		body{
			margin-top: 80px;
			margin-right: 50px;
			background-color: #ADD8E6;
			font-family: Helvetica;
			font-weight: lighter;
			text-shadow: 1px 1px #FFFACD;
		}
		header{
			border-color: #FFFACD;
			margin-right: 500px;
			margin-left: 500px;
			border-radius: 100px;
			border-top: solid;
			border-bottom: solid;
			font-size: 18pt;
			font-family: sans-serif;
			font-weight: bold;
			text-shadow: 2px 2px #FFFACD;
		}
	</style>
</head>
<body>
<?php
if (empty($_POST['nama'])) {
	header("Location:tugaskosong.php");
}
elseif (empty($_POST['email'])){
	header("Location:tugaskosong.php");
}
else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center>";
	date_default_timezone_set("Asia/Jakarta");
	echo "<center><p>Tanggal : ".date("d F Y"."</center></p>");
	echo "<center><p>Waktu Login : ".date("g:i:s a"."</center></p>"); 
}
?>
<br>
<table class="tabel" border="3">
	<tr>
		<td align="center" width="175">Nama Lengkap </td>
		<td align="center" width="220">Ibrahim</td>
	</tr>	
	<tr>
		<td align="center">TTL </td>	
		<TD align="center">Pasuruan, 29 Juni 2000</TD>
	</tr>
	<tr>
		<td align="center">Alamat </td>	
		<td align="center">Perumahan Ikip Blok A no.25</td>
	</tr>	
	<tr>
		<td align="center">PTN</td>
		<td align="center">UPN "Veteran" Jatim</td>
	</tr>
	<tr>
		<td align="center">Prodi</td>	
		<td align="center">Sistem Informasi</td>
	</tr>
</table>
</body>
</html>