<?php

class Kucing extends Binatang {

    private $kutus;

    public function makan() {
        echo "Krauk... krauk... <br>";

        foreach($this->kutus as $kutu) {
            $kutu->lompat();
        }
    }

    public function bicara() {
        echo "Meong... meong... <br>";
    }

    public function tambahKutu($kutu) {
        $this->kutus[] = new Kutu;
    }

}