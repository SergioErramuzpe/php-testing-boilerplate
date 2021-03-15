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
        if ($this->player1Score == 0 && $this->player2Score == 0)
            return "Love all";
        elseif (($this->player1Score == 15 && $this->player2Score == 0) || ($this->player1Score == 0 && $this->player2Score == 15))
            return "Fifteen - Love";
        elseif ($this->player1Score == 15 && $this->player2Score == 15)
            return "Fifteen all";
        elseif (($this->player1Score == 15 && $this->player2Score == 30) || ($this->player1Score == 30 && $this->player2Score == 15))
            return "Fifteen - Thirty";
        elseif ($this->player1Score == 30 && $this->player2Score == 30)
            return "Thirty all";
        elseif (($this->player1Score == 15 && $this->player2Score == 40) || ($this->player1Score == 40 && $this->player2Score == 15))
            return "Fifteen - Forty";
        elseif (($this->player1Score == 15 && $this->player2Score == 40) || ($this->player1Score == 40 && $this->player2Score == 15))
            return "Thirty - Forty";
        else
            return "Deuce";
    }


}