<?php

session_start();
class BlackJack{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;
    public $dealerScore =0;
    public $disable = '';
    public $whoIsPlaying=' ';
    public $randomNumber1 = 0;
    public $randomNumber2 = 0;
    public $hit = 0;
    public $blackjack = '';

    //constructor
    function __construct($player) {
        $this->whoIsPlaying = $player;
        $this->randomNumber1 = rand(1, 11);
        $this->randomNumber2 = rand(1, 11);

    }

    //hit adds 2 cards between 1 and 11 and puts the score in the session
    function startGame($whoIsPlaying){
        //push two random numbers in array and get the sum
        $randomNumber = array();
        array_push($randomNumber, $this->randomNumber1,  $this->randomNumber2);
        array_sum($randomNumber);

        //put the sum in the score, score will equal the session score
        $_SESSION['score']= array_sum($randomNumber);
        $this->score= $_SESSION['score'];
        echo $whoIsPlaying.' score is '.$this->score;

    }

    //draws a card and adds that to session score
    function hitPlayer(){
        $this->hit  = rand(1, 11);
        echo '<br>'.$this->hit;

        // add hit card to score
        $this->score= $_SESSION['score'];
        $this->score += $this->hit;
        echo ',your score is'. $this->score;

    }


    // stand should end your turn and start the dealer's turn. (Your point total is saved.)
    function stand(){

        echo '<br> dealer draws card: ' . $this->hit;
        $_SESSION['score'] += $this->hit;

        if ($_SESSION['score'] > 15) {
            echo '<br> dealer score is:' . $_SESSION['score'];
            echo 'Dealer loses';

        } elseif ($_SESSION['score'] == 21) {
            echo 'BLACKJACK, dealer wins';

        } else {
            echo 'dealer score is' . $_SESSION['score'] += $this->hit;;
        }
    }

    //Surrender should make you surrender the game. (Dealer wins.)
    function surrender(){
        echo 'LOSER, dealer wins';

    }

}