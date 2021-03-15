<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{

    var $player1Score;
    var $player2Score;


    /**
     * TennisGame constructor.
     */
    public function __construct($player1Score, $player2Score)
    {
        $this->player1Score = $player1Score;
        $this->player2Score = $player2Score;
    }

    public function getScore () : string {
        if ($this->player1Score == $this->player2Score)
            return "Love all";
        else
            return "Fifteen - Love";
    }


}