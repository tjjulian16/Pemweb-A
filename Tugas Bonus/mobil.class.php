<?php

class mobil extends kendaraan {

    public  $totalKm;
    public  $kecepatan;
    public $asRoda = array();
    public function __construct(){
        $this->asRoda[0] = new asRoda;
       
        $this->asRoda[1] = new asRoda;
       
        $this->asRoda[2] = new asRoda;
        
        $this->asRoda[3] = new asRoda;
       echo "Mobil siap dijalankan!<br>";
           //karena mobil ada 4 roda pasti ada 4 asroda juga
        
       
    }

    public function bergerak(float $x){
        echo "Mobil bergerak!<br>";
        $this->asRoda[0]->berputar();
        echo "Mobil bergerak sejauh $x km <br>";
        
        
    }
    public function berhenti(){
        echo "Mobil Berhenti! <br>";
    }

    public function belok(float $y){
        echo "Mobil berbelok sejauh $y km <br>";
    }

    public function setKecepatanKpj (float $speed){
        $this ->kecepatan = $speed;
        echo "Kecepatan telah diubah menjadi $speed KPJ <br>";
    }

    public function setTotalKm(float $total){
        $this ->totalKm = $total;
        echo "Total Km telah mencapai $total  <br>";
    }
    public function getKecepatanKpj () :float {

    	return $this->kecepatan;
    }

    public function getKecepatanMph ():float {

        $mph = $this->kecepatan / 1.61;
        
        return $mph;

    	
    }


}