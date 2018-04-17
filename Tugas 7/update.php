<?php

include "connect.php";
$id = $_GET['row'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$job = $_POST['job'];

$sql = "UPDATE bukutelepon SET nama = '$nama', email = '$email'    , tel = '$tel', job = '$job' WHERE id = '$id'";

$res = mysqli_query($link,$sql);
if($res){
	echo "Data berhasil disimpan";
}
else{
	echo "gagal";
}


mysqli_close($link);
header('location: select.php');
exit;

?>