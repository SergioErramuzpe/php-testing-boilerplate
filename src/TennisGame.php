<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{

    var $player1Score;
    var $player2Score;
    var $player1Name;
    var $player2Name;

    /**
     * TennisGame constructor.
     */
    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
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
        elseif ($this->player1Score == 40 && $this->player2Score == 40)
            return "Deuce";
        elseif ($this->player1Score == 50)
            return "Advantage Player1";
        elseif ($this->player2Score == 50)
            return "Advantage Player2";
        elseif ($this->player1Score == 60)
            return "Win Player1";
        else
            return "Win Player2";
    }


}