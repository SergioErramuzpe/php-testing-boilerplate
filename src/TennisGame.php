<?php


namespace Deg540\PHPTestingBoilerplate;


class TennisGame
{



    public function getScore () : string {
        if ($this->player1Score == $this->player2Score)
            return "Love all";
    }


}