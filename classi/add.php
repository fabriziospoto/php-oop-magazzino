<?php
require_once 'prodotti.php';

class Telefoni extends Prodotto {
    public $schermo;
    public $memoria;
    public $connection;

}
class Portatili extends Prodotto {
    public $schermo;
    public $memoria;
    public $schedaGrafica;

    public function __construct($_modello, $_marchio, $_tipo ,$_schermo, $_memoria, $_schedaGrafica){
        $this->modello = $_modello;
        $this->marchio = $_marchio;
        $this->tipo = $_tipo;
        $this->schermo = $_schermo;
        $this->memoria = $_memoria;
        $this->schedaGrafica = $_schedaGrafica;
    }
}
class Gamestation extends Prodotto {
    public $potenza;
    public $memoria;
    public $comandi;
}
class Cuffie extends Prodotto {
    public $potenza;
    public $cavo;
}

 ?>
