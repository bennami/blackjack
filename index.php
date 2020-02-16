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
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form  method="post">
    <h1> Blackjack</h1>

    <div class="PlayerGame">
        <!--button to initiate game-->
        <button type="submit" value="4" name="start">start game</button>

        <p class="player"><?php if (isset($player)) { echo $player->whoIsPlaying;} ?></p>

        <section class="cards">
        <p  class="card" id="card1"><?php if (isset($player)){ echo $player->card1;} ?></p>
        <p class="card" id="card2"><?php if (isset($player)){ echo $player->card2;} ?></p>
        <p class ='card' id="card3"><?php if(isset($player)){ echo $player->hit;} ?></p>

        <p><?php  if (isset($player)){echo 'your score is'.$_SESSION['player']; }?></p>
        </section>

         <div class="loser"><?php echo $player->loser; ?></div>

    </div>
    <button type='submit' name="hit" value="1" style="display:<?php  if (isset($player)){  echo $player->disable; }?> "  >HIT</button>
    <button type='submit' name="stand" value="2"  style="display:<?php  if (isset($player)){ echo $player->disable;} ?>">STAND</button>
    <button type='submit' name="surrender" value="3" style="display:<?php  if (isset($player)){ echo $player->disable; }?>">SURRENDER</button>

    <div class="DealerGame">

        <p class dealer><?php   ?></p>
        <div class="score"> </div>
    </div>

    </form>
</body>
</html>

