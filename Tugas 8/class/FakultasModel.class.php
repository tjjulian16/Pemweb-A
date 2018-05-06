<?php

class FakultasModel {

    public function randomFak() {
       $fakultas = array('FILKOM','FTP','FK','FMIPA','FT','FKG','FP','VOKASI','FAPET','FISIP','FH','FPIK');
       $indexRan = rand(0,11);
       return $fakultas[$indexRan];
    }


}