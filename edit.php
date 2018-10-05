<?php
require_once("db.php");
$id         = $_GET['id'];
$siswa  	= mysqli_query($connect, "select * from siswa where id='$id'");
$row        = mysqli_fetch_array($siswa);

function active_radio_button($value,$input){
 $result =  $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">

	<table bgcolor="lightgrey" align="center"  style="border:5px double black;">
		<form  action="update.php" colspan="3" method="POST" >
			<tr >
				<td align="center" colspan="3">FORM EDIT</td><br>
			</tr>
			<tr>
				<td>id</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['id']; ?>" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>
			<tr>
				<td>Tamggal Lahir</td>
				<td>:</td>
				<td><input type="date" value="<?php echo $row['tgl_lahir']?>" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="simpan" value="Simpan Perubahan">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>