<?php

require_once("db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim	= $_POST['nim'];
$tgl_lahir= $_POST['tgl_lahir'];
$sql = "INSERT INTO siswa (id, nama, nim, tgl_lahir)
		VALUES('$id', '$nama', '$nim', '$tgl_lahir')";
	if(mysqli_query($connect, $sql)){
	header("Location:connection.php");
	} else{
		echo "Error: ".$sql. "<br>".mysqli_error($connect);
	}

mysqli_close($connect);

?>