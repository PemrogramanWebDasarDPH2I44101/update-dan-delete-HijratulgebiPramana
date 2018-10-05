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

$data = $_GET["nim"];

$sql = "DELETE FROM pegawai WHERE nim=$data";

if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil Di Hapus!";
    echo "<a href='list.php'>list</a>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}