<?php

class BlackJack{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;

    //hit adds 2 cards between 1 and 11 and puts the score in the session
    function hit(){

            $randomNumber = array();
            $randomNumber1 = rand(1, 11);
            $randomNumber2 = rand(1, 11);
            array_push($randomNumber, $randomNumber1, $randomNumber2);
            array_sum($randomNumber);
            echo $this->score = implode ('<br>',$randomNumber);
            echo $_SESSION['score']= 'your score is'.array_sum($randomNumber);
        }

    //draws a card and adds that to session score
    function hitPlayer(){
        $randomNumber = rand(1, 11);
        echo $_SESSION['score'] += $randomNumber;
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
//instantiate two objects
$player = new BlackJack();
$dealer = new BlackJack();

if (isset($_GET['start'])) {
    //$player->hit();
        //refresh page to start game
        if (isset($_POST['hit'])) {
         echo $player->hitPlayer();
        } else{
            echo$player->hit();
        }

    }













