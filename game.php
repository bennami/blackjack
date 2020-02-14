<?php
require ('blackjack.php');


//instantiate two objects
$player = new BlackJack();
$dealer = new BlackJack();

if (isset($_POST['start'])) {

         $player->startGame();

    }


//refresh page to start game
if (isset($_POST['hit'])) {

 $player->hitPlayer();

}













