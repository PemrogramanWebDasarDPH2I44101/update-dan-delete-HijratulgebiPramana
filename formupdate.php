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

$sql = "SELECT * FROM pegawai WHERE nim=$data";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
    		<center><h3>Silahkan Edit Data Diri Anda</h3></center>
    		<hr style="width: 250px">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row["nim"]; ?>" disabled>
                <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row["lahir"]; ?>"></td>
            </tr>
            <tr>
                 <td>Telfon</td>
                 <td>:</td>
                <td><input type="text" name="telfon" value="<?php echo $row["telfon"]; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input style="background-color: #8484d5" type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>