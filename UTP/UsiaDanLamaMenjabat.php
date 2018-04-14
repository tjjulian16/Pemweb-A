<?php
$NIP = $_POST['NIP'];

$nipUmur = substr($NIP, 0,8);
$tahun = substr($nipUmur, 0,4);
$bulan = substr($nipUmur, 4,2);
$tanggal = substr($nipUmur, 6,8);
$nipMenjabat = substr($NIP, 8,4);

$umur = date('Y') - $tahun;
$lama = date('Y') - $nipMenjabat;
echo "Tanggal Lahir Anda: $tanggal - $bulan
 - $tahun ";
 echo "umur anda: $umur"."<br>";
 echo "Lama Menjabat: $lama";
?>