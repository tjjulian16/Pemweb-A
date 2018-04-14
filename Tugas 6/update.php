<?php

$file = "data.txt";
$data = file_get_contents($file);
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$job = $_POST['job'];

$databarulagi = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|".
        $job   . "[R]";

$rowdel = $_GET['row'];

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
    if ($rowdel == $i){
    	$databaru.= $databarulagi ;
    }
    else{
    	$databaru .= $baris[$i] . "[R]";
    }
    
}

file_put_contents($file, $databaru);

header('location:baca.php');