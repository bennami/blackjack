<?php
require ('blackjack.php');


//instantiate two objects
$player = new BlackJack();
$dealer = new BlackJack();

if (isset($_POST['start'])) {

         $player->startGame();
    }



if (isset($_POST['hit'])) {

 $player->hitPlayer();

 if($_SESSION['score'] >21){
     echo '<br> you lose';
 }elseif ($_SESSION['score'] == 21){
     echo 'BLACKJACK';
 }

}

if(isset($_POST['stand'])){
    $dealer->stand();
    if($dealer->dealerScore >21){
        echo 'Dealer Loses';
    }
    //$dealer->hitPlayer();

}














