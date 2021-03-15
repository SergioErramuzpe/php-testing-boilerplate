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

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenAll()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Fifteen all", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenThirty()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Fifteen - Thirty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsThirtyAll()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Thirty all", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenForty ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Fifteen - Forty", $tennisGame->getScore());

    }

    public function returnsThirtyForty ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Thirty - Forty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsDeuce ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Deuce", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWhoHasAdvantageP1 ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Advantage Player1", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWhoHasAdvantageP2 ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Advantage Player2", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWinnerP1 ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Win Player1", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsWinnerP2 ()
    {

        $tennisGame = new TennisGame("Paco", "Javier");

        $this->assertEquals("Win Player2", $tennisGame->getScore());

    }


}
