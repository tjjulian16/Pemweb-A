<?php
class sepatuRoda extends kendaraan{

function __construct(){
		echo "Sepatu Roda baru terbuat!<br>";
		echo '<img src="sepatuRoda.png" style="width:15%; height: auto;" <br><br>';
	}
	public function bergerak (float $x){
		echo "Sepatu Roda bergerak maju sejauh $x m <br>";
	}

	public function berhenti(){
		echo "Sepatu Roda setop! <br>";
	}

	public function belok(float $y){
		echo "Sepatu Roda belok sejauh $y m <br>";
	}
}
?>