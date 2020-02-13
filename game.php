<?php

class BlackJack{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;
    public $randomNumber1 = 0;
    public  $randomNumber = 0;
    //hit adds a card between 1 and 11
    function hit(){
        if(isset($_POST['hit'])){
            $randomNumber = array();
            $randomNumber1 = rand(1, 11);
            $randomNumber2 = rand(1, 11);
            array_push($randomNumber, $randomNumber1, $randomNumber2);
            array_sum($randomNumber);
            echo $this->score = implode (' ',$randomNumber);
            echo $_SESSION['score']= array_sum($randomNumber);
        }else{
            $this->score;
            $this->randomNumber1=0;
            $this->randomNumber2=0;
        }
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
$player->hit();
    if (isset($_GET['start'])) {
    $player->score;
        //refresh page to start game
        if (isset($_POST['hit'])) {
            function hitPlayer(){
                $player->hit();
                // header('refresh: 0');

            }
        } else{
            $player->score;
        }

    }













