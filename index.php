<?php
require_once 'classi/prodotti.php';
require_once 'classi/add.php';

$product1 = new Prodotto('Iphone 12','Apple','Smartphone');
$product1->setPosition('A5');
var_dump($product1);

$product2 = new Prodotto('Galaxy S20','Samsung','Smartphone');
$product2->setPosition('A8');
var_dump($product2);
echo $product2->getPosition();

$product3 = new Prodotto('Ideapad 3','Lenovo','Notebook');
var_dump($product3);

$product4 = new Prodotto('Vivabook 15','Asus','Notebook');
var_dump($product4);

$product5 = new Prodotto('Playstation 4','Sony','Console');
var_dump($product5);

$product6 = new Prodotto('Airpod','Apple','Cuffie');
var_dump($product6);
$product6->prezzo = '39';
echo $product6->prezzoTotale(3);
