<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>

	<table>
		<form action="connect.php" colspan="3" method="POST" >
			<tr>
				<td align="center" colspan="3">SILAHKAN LOGIN TERLEBIH DAHULU</td><br>
			</tr>
			<tr>
				<td>Id</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>


				<td colspan="3" align="center"> <br><input type="submit" name="submit" value="KIRIM"></td>
			</tr>
		</form>
	</table>
</body>
</html>