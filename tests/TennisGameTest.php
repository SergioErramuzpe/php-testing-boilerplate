<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisGameTest extends TestCase
{
    /**
     * @test
     */
    public function returnsLoveAll()
    {
        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Love all", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function returnsFifteenLove ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenAll()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");

        $this->assertEquals("Fifteen all", $tennisGame->getScore());

    }


    /**
     * @test
     */
    public function returnsThirtyLove()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Thirty - Love", $tennisGame->getScore());

    }


    /**
     * @test
     */
    public function returnsFifteenThirty()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");

        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Fifteen - Thirty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsThirtyAll()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");

        $this->assertEquals("Thirty all", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFortyLove()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Forty - Love", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenForty ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Fifteen - Forty", $tennisGame->getScore());

    }

    public function returnsThirtyForty ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");

        $this->assertEquals("Thirty - Forty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsDeuce ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");

        $this->assertEquals("Deuce", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsDeuceAfterAdvantage ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Paco");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Javier");
        $tennisGame->wonPoint("Paco");

        $this->assertEquals("Deuce", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWhoHasAdvantageP1 ()
    {
        $player1Name = "Paco";
        $player2Name = "Javier";

        $tennisGame = new TennisGame($player1Name, $player2Name);

        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player1Name);


        $this->assertEquals("Advantage ".$player1Name, $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWhoHasAdvantageP2 ()
    {
        $player1Name = "Paco";
        $player2Name = "Javier";

        $tennisGame = new TennisGame($player1Name, $player2Name);

        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);


        $this->assertEquals("Advantage ".$player2Name, $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWinnerP1 ()
    {
        $player1Name = "Paco";
        $player2Name = "Javier";

        $tennisGame = new TennisGame($player1Name, $player2Name);

        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);
        $tennisGame->wonPoint($player1Name);

        $this->assertEquals("Win ".$player1Name , $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWinnerP2 ()
    {
        $player1Name = "Paco";
        $player2Name = "Javier";

        $tennisGame = new TennisGame($player1Name, $player2Name);

        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);
        $tennisGame->wonPoint($player2Name);

        $this->assertEquals("Win ".$player2Name, $tennisGame->getScore());

    }


}
