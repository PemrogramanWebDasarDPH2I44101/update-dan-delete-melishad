
<?php
require_once("db.php");
$id  = $_POST['id'];
$nim  = $_POST['nim'];
$nama  = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];


$sql="UPDATE siswa SET nim='$nim',nama='$nama',tgl_lahir='$tgl_lahir' where id='$id'";
mysqli_query($connect, $sql);
header("location:connection.php");
?>




