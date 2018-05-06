<?php
class mobilBalap extends mobil{

function __construct(){
	echo "Mobil Balap baru terbuat!<br>";
	parent::__construct();
		
		echo '<img src="mobilBalap.jpg" style="width:15%; height: auto;" <br><br>';
	}
	public function injakKopling(){
		echo "Kopling telah diinjak"."<br>";
		echo "Ganti gigi!<br>";
	}

	public function gunakanNOS(){
		echo "NOS telah digunakan <br>";
	}
}
?>