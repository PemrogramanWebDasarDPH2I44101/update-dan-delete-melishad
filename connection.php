<?php 
require_once("db.php");
?>


<html>
<table>
<head >
	<th>Id</th>
	<th>Nama</th>
	<th>Nim</th>
	<th>Tanggal Lahir</th>
	<th>Tugas</th>
</head>
<body>


<?php
 $sql = "SELECT * FROM siswa";
 $result = mysqli_query($connect, $sql);

 if(mysqli_num_rows($result) > 0){
 	
 	while ( $row = mysqli_fetch_assoc($result)) {
 		
 		$id= $row['id'];
 		echo "<tr>";
 		echo "<td>".$row['id']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['tgl_lahir']."</td>";
 		echo "<td>"."<a href='edit.php?id=$id'>Edit</a>       <a href='delete.php?id=$id'>Delete</a>"."</td>";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
mysqli_close($connect);

?>

</body>
</table>
</html>