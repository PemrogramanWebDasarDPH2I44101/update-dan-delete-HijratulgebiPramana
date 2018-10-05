<?php
$servername = "localhost";
$username   = "root";
$password	= "";
$db			= "webdas";

//connection user

$conn = mysqli_connect($servername,$username,$password,$db); 

//check connection

if(!$conn) {
	die("connection failed:".mysqli_connect_error());
}
?>
<h2 align="center">Data Pengunjung</h2>
<hr style="width: 185px">
<table border="1" align="center">
	<thead style="background-color: #58f658">
		<th>nama</th>
		<th>nim</th>
		<th>tgl_lahir</th>
		<th>telfon</th>
		<th>Action</th>
	</thead>
	<tbody>

<?php  
$sql	= "SELECT * FROM pegawai ";
$result	= mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 ) {
	//output data dari beberapa row
	while ($row = mysqli_fetch_assoc($result)) {
		$data = $row["nim"];
		echo "<tr>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['lahir'] . "</td>";
		echo "<td>" . $row['telfon'] . "</td>";
		echo "<td>" . "<a href='formupdate.php?nim=$data'>Edit</a> | <a href='delete.php?nim=$data'>Hapus</a>";
		echo "</tr>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
?>
	</tbody>
</table>