<?php

class FakultasController {

    private $modelFakultas;
    private $hasil;
    private $form;

    public function getHasil() {

        $this->modelFakultas = new FakultasModel();
        $fakultas = $this->modelFakultas->randomFak();

        $this->hasil = new Tampil();
        $this->hasil->tampilData($fakultas);

    }

    public function getForm(){

        $this->form = new Tampil();
        $this->form->tampilForm();
    }

    }


