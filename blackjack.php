<?php


class BlackJack{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;
    public $total =0;

    //hit adds 2 cards between 1 and 11 and puts the score in the session
    function startGame(){
        $randomNumber = array();
        $randomNumber1 = rand(1, 11);
        $randomNumber2 = rand(1, 11);
        array_push($randomNumber, $randomNumber1, $randomNumber2);
        array_sum($randomNumber);
        echo $this->score = implode (' and ',$randomNumber);
        $_SESSION['score']= array_sum($randomNumber);
       // $this->score = array_sum(($randomNumber));
        echo '<br>your score is '.$_SESSION['score'];

    }

    //draws a card and adds that to session score
    function hitPlayer(){
        $rand = rand(1, 11);
        echo '<br>'.$rand;
        $_SESSION['score'] +=  $rand;
        echo 'your score is'. $_SESSION['score'];


    }
    /*if (array_sum(explode('  ', $randomNumber)) <= 21){
       echo $this->score = 'BLACK JACK';
    }*/

    // stand should end your turn and start the dealer's turn. (Your point total is saved.)
    function stand(){

    }

    //Surrender should make you surrender the game. (Dealer wins.)
    function surrender(){

    }
}