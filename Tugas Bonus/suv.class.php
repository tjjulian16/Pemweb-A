<?php
class suv extends mobil{

function __construct(){
	echo "Mobil SUV baru terbuat!<br>";
	parent::__construct();
		
		echo '<img src="suv.jpg" style="width:15%; height: auto;" <br><br>';
	}
    public function bukaPintuBelakang(){
    	echo "Pintu Belakang terbuka <br>";
    	echo "Masukkan barang dulu..<br>";
    }
}
?>
