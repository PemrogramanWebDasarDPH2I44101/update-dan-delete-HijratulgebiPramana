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
$nama	= $_POST['nama'];
$nim	= $_POST['nim'];
$lahir	= $_POST['tgl_lahir'];
$telfon	= $_POST['telfon'];

$sql = "UPDATE pegawai SET nama='$nama', lahir='$lahir', telfon='$telfon'  WHERE nim=$nim";
if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil Di Edit!";
    echo "<a href='list.php'>list</a>";
}else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
}
?>