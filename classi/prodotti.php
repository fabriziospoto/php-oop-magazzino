<?php
class Prodotto{
    public $modello;
    public $marchio;
    public $tipo;
    public $prezzo;
    public $posizione;

    public function __construct($_modello, $_marchio, $_tipo) {
        $this->modello = $_modello;
        $this->marchio = $_marchio;
        $this->tipo = $_tipo;
    }

    public function setPosition($_posizione){
        $this->posizione = $_posizione;
    }

    public function getPosition(){
        if(empty($this->posizione)){
            die('Non hai settato la posizione');
        }
        return $this->posizione;
    }

    public function prezzoTotale($_quantita){
        if(empty($this->prezzo)){
            die('Non hai inserito il prezzo');
        }
        return $this->prezzo * $_quantita;
    }
}
