<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
include 'game.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Jack</title>
</head>
<body>
    <h1> Black Jack</h1>

    <div class="PlayerGame">
        <p>player</p>
        <div class="card"><?php $player = new BlackJack();
            $player->hit();
            echo $player->card?></div>
        <div class="card"><?php $player = new BlackJack();
            $player->hit();
            echo $player->card?></div>
        <button>HIT</button>
        <button>STAND</button>
        <button>SURRENDER</button>
    </div>

    <div class="PlayerGame">
        <p>Dealer</p>
        <div class="card"><?php $player = new BlackJack();
            $player->hit();
            echo $player->card?></div>
        <div class="card"><?php $player = new BlackJack();
            $player->hit();
            echo $player->card?></div>
        <div class="DealerCard"></div>
    </div>

    <!--button to initate game-->
    <form action="game.php" method="get">
        <input type="submit" value="Play game!">
    </form>
</body>
</html>

