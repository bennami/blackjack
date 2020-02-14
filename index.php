<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'game.php';

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
<form  method="post">
    <h1> Blackjack</h1>

    <div class="PlayerGame">
        <p><?php echo $player->whoIsPlaying; ?></p>
        <p><?php echo $dealer->whoIsPlaying; ?></p>

        <p><?php echo $player->randomNumber1 ?></p>
        <p><?php echo $player->randomNumber2 ?></p>
        <div class="score"><?php  echo $_SESSION['score']?></div>
    </div>
    <button type='submit' name="hit" value="1" <?php echo $player->disable ?> >HIT</button>
    <button type='submit' name="stand" value="2" <?php echo $player->disable ?>>STAND</button>
    <button type='submit' name="surrender" value="3" <?php echo $player->disable ?>>SURRENDER</button>

    <div class="PlayerGame">
        <p>Dealer</p>
        <div class="score"> </div>
    </div>

    <!--button to initate game-->

        <button type="submit" value="4" name="start">start game</button>
    </form>
</body>
</html>

