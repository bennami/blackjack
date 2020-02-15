<?php
require ('blackjack.php');


//instantiate two objects
$player = new BlackJack('player');
$dealer = new BlackJack('dealer');

if (isset($_POST['start'])) {

   $player->startGame('player');
}else{
    $player->whoIsPlaying = '';
    $dealer->whoIsPlaying = '';
    $player->randomNumber2='';
    $player->randomNumber1='';
    $player->score = '' ;
   $player->hit='start the game!';
}

if (isset($_POST['hit'])) {
 $player->hitPlayer('player');

    if($player->score >21){
        echo 'you lose';
        $player->disable = 'none';
    }elseif ($player->score == 21){
         $player->blackjack ='<BLACKJACK';
    }

}else{
 $player->hit='hit me!';
}

if(isset($_POST['stand'])){
    $dealer->startGame('dealer');

    if($dealer->score > 21){
        echo '<br>Dealer Loses';
    }
    while($dealer->score < 15) {
    $dealer->stand('dealer');
    }

}

if(isset($_POST['surrender'])){

    $dealer->surrender();

}
















