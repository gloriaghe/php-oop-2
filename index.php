<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Carrello.php';
include __DIR__ . '/classes/CreditCard.php';
include __DIR__ . '/classes/Cucce.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/classes/Food.php';

//prodotti
$CucciaCane = new Cucce("Cuccia Lunetta", "LovDogs", 20, 1, "Cani", "green");
$Biscotti = new Food("BiscDog", "CaniAffamati", 3, 2, "Cani", 300, "2022-11-01" );
$Pallina = new Game("Pallina Salterina", "SaltaSalta", 5, 1, "Cani", "black");
$crocchette = new Food("Crocchette Dietetiche", "GattiMagri", 15, 1, "Gatti", 3000, "2023-01-01");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <div>
        <h1>Il tuo carrello:</h1>
        <?= $CucciaCane->printProdotto() ?>
        <?= $Biscotti->printProdotto() ?>
        <?= $Pallina->printProdotto() ?>
        <?= $crocchette->printProdotto() ?>

    </div>
    
</body>
</html>