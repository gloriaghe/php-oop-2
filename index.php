<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Carrello.php';
include __DIR__ . '/classes/CreditCard.php';
include __DIR__ . '/classes/Cucce.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Antipulci.php';


//prodotti
$CucciaCane = new Cucce("Cuccia Lunetta", "LovDogs", 20, 1, "Cani", "green");
$Biscotti = new Food("BiscDog", "CaniAffamati", 3, 2, "Cani", 300, "2022-11-01" );
$Pallina = new Game("Pallina Salterina", "SaltaSalta", 5, 1, "Cani", "black");
$crocchette = new Food("Crocchette Dietetiche", "GattiMagri", 15, 1, "Gatti", 3000, "2023-01-01");
$antipulci = new Antipulci("Frontline", "Pulci&Soci", 25.30, 1, "Cani", "" );


//utente loggato
$Nathan = new User("Nathan", "Bianchi", "Viale Dante 12, Firenze" , "nathan@gmail.com", true);

//utente non loggato
$Noah = new User("Noah", "Rossi", "Via Fiume 154, Milano" , "noah@yahoo.com", false);

$cardNathan = new CreditCard(3242525436, "2021/11/16", $Nathan, "", "", "");
$carrelloNathan = new Carrello(0, $Nathan, [$CucciaCane->price, $Biscotti->price, $Pallina->price, $crocchette->price], 0, "" );

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
       
        <section id="prodotti">
            <div>
                <?= $CucciaCane->printProdotto() ?>
            </div>
            <div>
                <?= $Biscotti->printProdotto() ?>
            </div>
            <div>
                <?= $Pallina->printProdotto() ?>
            </div>
            <div>
             <?= $crocchette->printProdotto() ?>
            </div>
            <div>
             <?= $antipulci->printProdotto() ?>
            </div>

        </section> 
        <h1>Pagamento:</h1>
        <?= $carrelloNathan->Total($carrelloNathan->product, $carrelloNathan->total) ?>
        <h1>Validit?? carta:</h1>
        <?= $cardNathan->date($cardNathan->expirationDate, $cardNathan->today_stamp, $cardNathan->event_date_stamp) ?>

    </div>
    
</body>
</html>