<?php
$username = "root";
$servername = "localhost";
$dbname = "myDB";

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<header>
		<div class="container">
			<br>
				<form action="" method="post">
					<h2>Login Admin</h2>
					<br>
					<label>Username :</label>
					<input type="text" name="username" placeholder="username" id="name">
					<label>Password :</label>
					<input id="password" name="password" placeholder="password" type="password">
					<input type="submit" name="submit" id="submit" value="login">
				</form>
		</div>
	</header>
	<?php
	if (isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
		$cek = mysqli_num_rows($query);
		if($cek == 1){
			$_SESSION['userweb']=$username;
			header("location:cetak.php");
			exit;
		}else{
			echo "Maaf username atau password anda salah";
		}
	}
	?>
</body>
</html>