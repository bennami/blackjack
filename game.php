<?php
require ('blackjack.php');


//instantiate two objects
$player = new BlackJack();
$dealer = new BlackJack();

if (isset($_POST['start'])) {

         $player->startGame('your');
    }

if (isset($_POST['hit'])) {

 $player->hitPlayer();

 if($_SESSION['score'] >21){

     echo '<br> you lose';
        $player->disable = 'disabled';
 }elseif ($_SESSION['score'] == 21){
    $blackjack ='<br>BLACKJACK';
 }

}

if(isset($_POST['stand'])){
    $dealer->startGame('dealer');
    if($dealer->dealerScore > 21){
        echo '<br>Dealer Loses';
    }
    while($_SESSION['score']<15) {
        $randomCard = rand(1, 11);
        echo '<br> dealer draws card: ' . $randomCard;
        $_SESSION['score'] += $randomCard;
        if ($_SESSION['score'] > 15) {
            echo '<br> dealer score is:' . $_SESSION['score'];
            echo 'Dealer loses';
            break;
        } elseif ($_SESSION['score'] == 21) {
            echo 'BLACKJACK, dealer wins';
            break;
        } else {
            echo 'dealer score is' . $_SESSION['score'] += $randomCard;;
        }
    }

}

if(isset($_POST['surrender'])){

    $dealer->surrender();
    if($dealer->dealerScore >21){
        echo '<br>Dealer Loses';
    }

    //$dealer->hitPlayer();

}
















