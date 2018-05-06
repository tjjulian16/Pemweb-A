<?php
require_once("asRoda.class.php");
require_once("kendaraan.class.php");
require_once("mobil.class.php");
require_once("mobilBalap.class.php");
require_once("roda.class.php");
require_once("sepatuRoda.class.php");
require_once("sepeda.class.php");
require_once("suv.class.php");

echo "------------Objek Mobil SUV----------<br>";
$mobilSUV= new suv;
$mobilSUV->bukaPintuBelakang();
$mobilSUV->bergerak(2.5);
$mobilSUV->belok(1.2);
$mobilSUV->setKecepatanKpj(5.5);
$mobilSUV->berhenti();
$mobilSUV->setTotalKm(10);
echo "Kecepatan dalam MPH = ".$mobilSUV->getKecepatanMph()." MPH<br>";


echo "<br><br>----------Objek Mobil Balap-----------------<br>";
$mobilBalap= new mobilBalap;
$mobilBalap->bergerak(3.5);
$mobilBalap->injakKopling();
$mobilBalap->setKecepatanKpj(75.0);
$mobilBalap->gunakanNos();
$mobilBalap->setKecepatanKpj(150.0);
$mobilBalap->setTotalKm(200);
echo "Kecepatan dalam KPJ = ".$mobilBalap->getKecepatanKpj()." KPJ <br>";
$mobilBalap->berhenti();

echo "<br><br>----------Objek Sepeda-----------------<br>";
$sepeda= new sepeda;
$sepeda->bergerak(3.5);
$sepeda->belok(5.1);
$sepeda->berhenti();

echo "<br><br>----------Objek Sepeda-----------------<br>";
$sepatu= new sepatuRoda;
$sepatu->bergerak(4.2);
$sepatu->belok(1.0);
$sepatu->berhenti();
?>