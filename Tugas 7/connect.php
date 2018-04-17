<?php

/*konfigurasinya*/

$user = 'user';
$pass = 'rahasia';
$host = 'localhost';
$db = 'butel';


/* buat koneksi ke server mysql*/

$link = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){ /* ini artinya kalo dia nilai error nya >0 maka dia akan true*/
	echo "koneksi database gagal dibuat";
	exit;
}

?>