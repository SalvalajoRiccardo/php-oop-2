<?php
require_once 'Prod.php';
require_once 'Specprod.php';


$prodotto1 = new Product ('aspirapolvere','elettrodomestico',200,3);
try {
    $prodotto1->setBuy(5);
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
}
$prodotto1->setPosition('sede-1');

$prodotto2 = new Product ('coca-cola','alimentare',2,500);
$prodotto2->setBuy(20);
$prodotto2->setPosition('sede-1');

$prodotto3 = new Product ('cacciavite','attrezzo',6,16);
$prodotto3->setBuy(3);
$prodotto3->setPosition('sede-1');

$prodotto4 = new SpecialProduct ('vecchio-aspirapolvere','elettrodomestico',200,3);
$prodotto4->setBuy(1);
$prodotto4->setPosition('sede-2');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <h2>Prodotti</h2>
    <div>
        <h3><?php echo 'Nome prodotto: ' . $prodotto1->getName() ?></h3>
        <span><?php echo 'tipo: ' . $prodotto1->getType() . ' ' . 'Prezzo: ' . $prodotto1->getPrice() . '$' ?> </span>
        <h5><?php echo 'In Stock: ' . $prodotto1->getStock() ?></h5>
        <h5><?php echo 'Da Comprare: ' . $prodotto1->getBuy()  ?></h5>
        <span><?php echo 'Posizione Fisica: ' . $prodotto1->getPosition() ?></span>
        <br>
    
        <h3><?php echo 'Nome prodotto: ' . $prodotto2->getName() ?></h3>
        <span><?php echo 'tipo: ' . $prodotto2->getType() . ' ' . 'Prezzo: ' . $prodotto2->getPrice() . '$' ?> </span>
        <h5><?php echo 'In Stock: ' . $prodotto2->getStock() ?></h5>
        <h5><?php echo 'Da Comprare: ' . $prodotto2->getBuy() ?></h5>
        <span><?php echo 'Posizione Fisica: ' . $prodotto2->getPosition() ?></span>
        <br>
    
        <h3><?php echo 'Nome prodotto: ' . $prodotto3->getName() ?></h3>
        <span><?php echo 'tipo: ' . $prodotto3->getType() . ' ' . 'Prezzo: ' . $prodotto3->getPrice() . '$' ?> </span>
        <h5><?php echo 'In Stock: ' . $prodotto3->getStock() ?></h5>
        <h5><?php echo 'Da Comprare: ' . $prodotto3->getBuy() ?></h5>
        <span><?php echo 'Posizione Fisica: ' . $prodotto3->getPosition() ?></span>
        <br>

    </div>

    <h2>Prodotti Speciali</h2>
    <div>
        <h3><?php echo 'Nome prodotto: ' . $prodotto4->getName() ?></h3>
        <span><?php echo 'tipo: ' . $prodotto4->getType() ?> </span>
        <h5><?php echo 'sconto: ' . $prodotto4->getSconto().'%' . '  ' . 'Prezzo Scontato: ' . $prodotto4->getPrice() . '$' ?></h5>
        <h5><?php echo 'In Stock: ' . $prodotto4->getStock() ?></h5>
        <h5><?php echo 'Da Comprare: ' . $prodotto4->getBuy() ?></h5>
        <span><?php echo 'Posizione Fisica: ' . $prodotto4->getPosition() ?></span>
        <br>
    </div>

</body>
</html>