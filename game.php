<?php
class BlackJack{

//property score
 public $score = 'score';



//hit adds a card between 1 and 11
function hit(){
    $randomNumber=  rand(1,11);
}

// should end your turn and start the dealer's turn. (Your point total is saved.)
function stand(){

}

//Surrender should make you surrender the game. (Dealer wins.)
function surrender(){

}





}

$objectDealer =  new BlackJack();
$objectPlayer  = new BlackJack();