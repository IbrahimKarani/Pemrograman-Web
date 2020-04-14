<?php
$host = "localhost";
$username = "root";
$password = "";
$koneksi = mysqli_connect($host, $username, $password) or die ("koneksi gagal");
$db  = mysqli_select_db($koneksi,"myDB") or die(mysqli_error($koneksi));
?>