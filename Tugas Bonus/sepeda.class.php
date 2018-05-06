<?php
class sepeda extends kendaraan{

	function __construct(){
		echo "Sepeda baru terbuat!<br>";
		echo '<img src="sepeda.png" style="width:15%; height: auto;" <br><br>';
	}
	public function bergerak (float $x){
		echo "Sepeda bergerak maju sejauh $x m <br>";
	}

	public function berhenti(){
		echo "Sepeda setop! <br>";
	}

	public function belok(float $y){
		echo "Sepeda belok sejauh $y m <br>";
	}
}
?>