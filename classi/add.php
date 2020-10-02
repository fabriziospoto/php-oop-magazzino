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
