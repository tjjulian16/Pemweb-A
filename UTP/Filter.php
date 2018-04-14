<?php
$filUmur = $_POST['Usia'];
$filJabat = $_POST['Lama'];
$daftarNIP = array('195910081990091050' , '196508171993051035', '197001011985012017','197602292004062021','198309112008031100','197912102007122069','198807071990072123','198511222015111012');


echo "FILTER BERDASARKAN UMUR:" ."<br>"."Umur Filter: $filUmur"."<br>";
	$counter = 1;
	for($i=0 ; $i < count($daftarNIP) ; $i++) {
		
	$nipUmur = substr($daftarNIP[$i], 0,8);
    $tahun = substr($nipUmur, 0,4);
    $umur = date('Y') - $tahun;
if($umur > $filUmur){
	echo "NIP $counter :$daftarNIP[$i]"."<br>";
}
$counter++;
}
echo "<br>";
echo "FILTER BERDASARKAN LAMA MENJABAT:"."<br>"."Lama Menjabat Filter: $filJabat"."<br>";

	$penghitung = 1;
	for($a=0 ; $a < count($daftarNIP) ; $a++) {
		
	$nipMenjabat = substr($daftarNIP[$a], 8,4);
$lama = date('Y') - $nipMenjabat;
if($lama > $filJabat){
	echo "NIP $penghitung :$daftarNIP[$a]"."<br>";
}
$penghitung++;
}

?>