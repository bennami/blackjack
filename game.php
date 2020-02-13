<?php
class BlackJack{

//property score. This property should have the value of the player's score at all times.
 public $score;
 public $name;
 public $card;



//hit adds a card between 1 and 11
function hit(){
   $randomNumber=  rand(1,11);
   $this->card = strval($randomNumber);
}

// should end your turn and start the dealer's turn. (Your point total is saved.)
function stand(){

}

//Surrender should make you surrender the game. (Dealer wins.)
function surrender(){

}





}

//instantiate two objects
$objectDealer =  new BlackJack();
$objectPlayer  = new BlackJack();