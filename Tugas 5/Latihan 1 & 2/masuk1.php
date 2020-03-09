<?php
if (empty($_POST['nama'])) {
	header("Location:tugaskosong.php");
}elseif (empty($_POST['email'])){
	header("Location:tugaskosong.php");
}else {
	include "incMasuk.php";
}
?>