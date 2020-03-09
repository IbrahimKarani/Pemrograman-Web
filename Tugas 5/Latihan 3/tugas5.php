<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style type="text/css">
		body{
			font-size: 15pt;
			margin-top: 200px;
			margin-left: 100px;
			background-color: #ADD8E6 ;
			font-family: Helvetica;
			font-weight: lighter;

		}
	</style>
</head>
<body>
<form method="POST" action="posttugas5.php">
		<table width="400" align="center" cellpadding="2" cellspacing="1">
			<tr>
				<td width="20">Nama  : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="20">Email :</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>