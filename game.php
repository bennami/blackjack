<?php

class BlackJack
{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;
    //hit adds a card between 1 and 11
    function hit(){
        $randomNumber = array();
        if (isset($_POST['hit'])) {
            $randomNumber1 = rand(1, 11);
            $randomNumber2 = rand(1, 11);
            array_push($randomNumber, $randomNumber1, $randomNumber2);

            $this->score = implode ('  ', $randomNumber);
            //$_SESSION['score']= $this->score +=$randomNumber;
            echo $this->score;
        }

    }

    // stand should end your turn and start the dealer's turn. (Your point total is saved.)
    function stand()
    {

    }

    //Surrender should make you surrender the game. (Dealer wins.)
    function surrender()
    {

    }
}

//instantiate two objects
$player = new BlackJack();
$dealer = new BlackJack();


//refresh page to start game
if ($_GET['start'] == 4) {
    // header('refresh: 0');

    if (($_POST['hit']) == 1) {
        $score = $player->hit();

    }

    if (($_POST['stand']) == 2) {

        $score = $dealer->hit();
    }
}














