<?php
require_once 'Prod.php';


$prodotto1 = new Product ('aspirapolvere','elettrodomestico',200,3);


$prodotto2 = new Product ('coca-cola','alimentare',2,500);


$prodotto3 = new Product ('cacciavite','attrezzo',6,16);


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
    <h3><?php echo 'Nome prodotto: ' . $prodotto1->getName() ?></h3>
    <span><?php echo 'tipo: ' . $prodotto1->getType() . ' ' . 'Prezzo: ' . $prodotto1->getPrice() . '$' ?> </span>
    <h5><?php echo 'In Stock: ' . $prodotto1->getStock() ?></h5>

    <h3><?php echo 'Nome prodotto: ' . $prodotto2->getName() ?></h3>
    <span><?php echo 'tipo: ' . $prodotto2->getType() . ' ' . 'Prezzo: ' . $prodotto2->getPrice() . '$' ?> </span>
    <h5><?php echo 'In Stock: ' . $prodotto2->getStock() ?></h5>

    <h3><?php echo 'Nome prodotto: ' . $prodotto3->getName() ?></h3>
    <span><?php echo 'tipo: ' . $prodotto3->getType() . ' ' . 'Prezzo: ' . $prodotto3->getPrice() . '$' ?> </span>
    <h5><?php echo 'In Stock: ' . $prodotto3->getStock() ?></h5>
</body>
</html>