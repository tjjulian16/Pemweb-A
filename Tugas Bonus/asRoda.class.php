<?php
/**
* 
*/
class asRoda
{
	private $roda;
	function __construct(){
		$this->tambahRoda();
	}
	
	public function tambahRoda(){
		$this->roda = new Roda;
		echo "Roda berhasil ditambahkan <br>";
	}
	public function berputar(){
		echo "As Roda berputar <br>";
		$this->roda->berputar();
	}
}
?>