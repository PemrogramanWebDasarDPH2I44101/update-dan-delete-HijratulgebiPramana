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

$sql = "INSERT INTO pegawai(nama,nim,lahir,telfon) VALUES('$nama','$nim','$lahir','$telfon')";

if(mysqli_query($conn,$sql)){

	echo "Berhasil Menambahkan Data!";
	echo "<a href='list.php'>list</a>";
}else{
echo "error:".$sql."<br>".mysqli_error($conn);	
}



?>