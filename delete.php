<?php
require_once("db.php");


$id=$_GET['id'];
$sql ="DELETE from siswa where id =$id ";
mysqli_query($connect, $sql);
header("Location:connection.php");

?>