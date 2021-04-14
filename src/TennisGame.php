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

    public function wonPoint ($playerName) : void
    {

        $playerScore = 0;
        $otherScore = 0;

        if ($playerName == $this->player1Name) {
            $playerScore = $this->player1Score;
            $otherScore = $this->player2Score;

        } else {
            $playerScore = $this->player2Score;
            $otherScore = $this->player1Score;
        }

        if ($otherScore == 50 && $playerScore == 40) {
            $otherScore = 40;
        } else if ($otherScore == 40 && $playerScore == 40) {
            $playerScore = 50;
        } else if ($playerScore <= 15) {
            $playerScore += 15;
        } else if ($playerScore == 40) {
            $playerScore += 20;
        } else
            $playerScore += 10;

        if ($playerName == $this->player1Name) {
            $this->player1Score = $playerScore;
            $this->player2Score = $otherScore;
        } else {
            $this->player2Score = $playerScore;
            $this->player1Score = $otherScore;
        }


    }

    public function getScore () : string {
        if ($this->player1Score == 0 && $this->player2Score == 0)
            return "Love all";
        elseif (($this->player1Score == 15 && $this->player2Score == 0) || ($this->player1Score == 0 && $this->player2Score == 15))
            return "Fifteen - Love";
        elseif ($this->player1Score == 15 && $this->player2Score == 15)
            return "Fifteen all";
        elseif (($this->player1Score == 30 && $this->player2Score == 0) || ($this->player1Score == 0 && $this->player2Score == 30))
            return "Thirty - Love";
        elseif (($this->player1Score == 15 && $this->player2Score == 30) || ($this->player1Score == 30 && $this->player2Score == 15))
            return "Fifteen - Thirty";
        elseif ($this->player1Score == 30 && $this->player2Score == 30)
            return "Thirty all";
        elseif (($this->player1Score == 40 && $this->player2Score == 0) || ($this->player1Score == 0 && $this->player2Score == 40))
            return "Forty - Love";
        elseif (($this->player1Score == 15 && $this->player2Score == 40) || ($this->player1Score == 40 && $this->player2Score == 15))
            return "Fifteen - Forty";
        elseif ($this->player1Score == 40 && $this->player2Score == 40)
            return "Deuce";
        elseif ($this->player1Score == 50)
            return "Advantage ".(string)$this->player1Name;
        elseif ($this->player2Score == 50)
            return "Advantage ".(string)$this->player2Name;
        elseif ($this->player1Score == 60)
            return "Win ".(string)$this->player1Name;
        else
            return "Win ".(string)$this->player2Name;
    }


}