<?php
require('blackjack.php');

//instantiate two objects
$player = new BlackJack('player');
$dealer = new BlackJack('dealer');

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

if (isset($_POST['hit'])) {
    $player->hitPlayer('player');

    if ($player->score > 21) {
        echo 'you lose';
        $player->disable = 'none';
    } elseif ($player->score == 21) {
        $player->blackjack = 'BLACKJACK';
    }

} else {
    $player->hit = 'hit me!';
}

if (isset($_POST['stand'])) {
    $dealer->startGame('dealer');

    if ($dealer->score > 21) {
        echo '<br>Dealer Loses';
    }
    while ($dealer->score < 15) {
        $dealer->stand('dealer');
    }

}

if (isset($_POST['surrender'])) {

    $dealer->surrender();

}
/*require ('blackjack.php');
session_start();



// If there already is a session, 'load' it into the array.
if (isset($_SESSION)) {
    $player = new Blackjack('player');
     $_SESSION['player'] =$player->score ;
    $dealer = new BlackJack('dealer');
    $_SESSION['dealer']=  $dealer->score;
    // If there isn't, clear it and start anew with 2 'random cards'
}




$loser = 'you lose.';
if (isset($_POST['start'])) {
    //instantiate two objects





    if (isset($_POST['hit'])) {
        $player->hit();
        $_SESSION["scorePlayer"] = $player->score;
        $playerScore = $_SESSION['scorePlayer'];
        if ($player->score > 21) {
            echo $loser;
            $player->disable = "disabled";
            session_destroy();
        }elseif ($player->score == 21){
            echo $player->blackjack;
        }
    }

    if(isset($_POST['stand'])){
        $dealer->startGame('dealer');
    while($this->score < 21){
            if ($this->score > 15) {
            echo '<br> dealer score is:' . $this->score;
            echo 'Dealer loses';
            } elseif ($this->score == 21) {
            echo 'BLACKJACK, dealer wins';

            } else {
            echo 'dealer score is' . $this->score += $this->hit;;
            }
        }
    }

    if(isset($_POST['surrender'])){

        echo $dealer->surrender();

    }
}*/
























