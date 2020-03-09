<?php
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center>";
	date_default_timezone_set("Asia/Jakarta");
	echo "<center><p>Tanggal : ".date("d F Y"."</center></p>");
	echo "<center><p>Waktu Login : ".date("g:i:s a"."</center></p>");
?>