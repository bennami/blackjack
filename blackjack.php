<?php

session_start();
class BlackJack{
    //property score. This property should have the value of the player's score at all times.
    public $score = 0;
    public $disable = '';
    public $whoIsPlaying=' ';
    public $card1 = 0;
    public $card2 = 0;
    public $hit = 0;
    public $blackjack = '';
    public $loser;
    public $sum = array();

    //constructor
    function __construct($player) {
        $this->whoIsPlaying = $player;
        $this->card1 = rand(1, 11);
        $this->card2 = rand(1, 11);
        array_push($this->sum, $this->card1, $this->card2);
        $this->score = array_sum($this->sum);

    }


    function startGame($whoIsPlaying){
        //put the sum in the score, score will equal the session score
        $_SESSION[$whoIsPlaying]= $this->score;
        $this->score = $_SESSION[$whoIsPlaying];
        $whoIsPlaying.' score is '.$this->score;

    }

    //draws a card and adds that to session score
    function hit($whoIsPlaying){
        $this->hit  = rand(1, 11);
        echo '<br>'.$whoIsPlaying.' hits with '.$this->hit;
        // add hit card to score
        $this->score = $_SESSION[$whoIsPlaying];
        $_SESSION[$whoIsPlaying] += $this->hit;
        echo '<br>'.$whoIsPlaying.' score is '. $_SESSION[$whoIsPlaying];

    }


    // stand should end your turn and start the dealer's turn. (Your point total is saved.)
    function stand(){

            $this->hit('dealer');

    }






}



function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
//echo whatIsHappening();