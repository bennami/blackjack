<?php
require('blackjack.php');

//instantiate two objects, player and dealer, pass in parameter for the constructor
$player = new BlackJack('player');
$dealer = new BlackJack('dealer');

//when you start game, invoke startGame method for player
if (isset($_POST['start'])) {
    $player->startGame('player');
} else {
    $player->whoIsPlaying = '';
    $dealer->whoIsPlaying = '';
    $player->card2 = '';
    $player->card1 = '';
    $player->score = '';
    $player->hit = 'start the game!';

}

//hit button, invoke hit method and check for score
if (isset($_POST['hit'])) {
    $player->hit('player');

    if ($_SESSION['player'] > 21) {
       echo  $player->loser = '<br> YOU LOSE';
        $player->disable = 'none';
    } elseif ($_SESSION['player'] == 21) {
       echo  $player->blackjack = 'BLACKJACK';
    }
} else {
    $player->hit = ' ';
}

//stand button, start game for dealer, use a while loop to automate process
if (isset($_POST['stand'])) {
    $dealer->startGame('dealer');
    do{
        $dealer->stand();
    }while($_SESSION['dealer'] < 21);

    if ($_SESSION['dealer'] > 21) {
        echo $dealer->loser = '<br> DEALER LOSES';
        $dealer->disable = 'none';
    } elseif ($_SESSION['dealer'] == 21) {
        echo $dealer->blackjack = 'BLACKJACK';
    } else {
        $dealer->hit = ' ';
    }
}




//surrender button, display loser text
if (isset($_POST['surrender'])) {
    $player->loser;
}else{
    $player->loser = '';
}





























