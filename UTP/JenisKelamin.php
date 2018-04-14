<?php
$NIP = $_POST['NIP'];
$jenisKelamin = $NIP[14];
if($jenisKelamin==1){
	echo "Jenis Kelamin = Laki-Laki";
}
elseif($jenisKelamin == 2){
	echo "Jenis Kelamin = Perempuan";
}


?>