<?php
$rata2=0;
$data = array (10,12,14,16,18);
function rata2 ($data,$banyakData){
	$total=0;
	global $rata2;
	for($x=0; $x<$banyakData ;$x++){
		$total += $data[$x];
	}
	$rata2 = $total/$banyakData;
	return  $rata2;
}
function varians($data,$banyakData){
	global $rata2;
	$hasil =0;
	$varians =0;
	for($x=0; $x<$banyakData ;$x++){
		$hasil += pow(($data[$x] - $rata2),2);

	}	
	$varians = $hasil / ($banyakData -1);
	return $varians;
}
echo "RUMUS VARIANS" ."<br>";
echo "Yang kita butuhkan untuk menghitung varians adalah:"."<br>"."Nilai Data"."<br>"."Jumlah Data"."<br>"."Rata-rata data"."<br>";
echo "Data yang tersedia ada: ".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."<br>";
echo "Jumlah data ada: ".count($data)."<br>";
echo "Rata-rata data tersebut adalah: ".rata2($data,count($data))."<br>";
echo "Varians data tersebut adalah: ".varians($data,count($data))."<br>";
?>