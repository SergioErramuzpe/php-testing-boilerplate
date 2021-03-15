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
        $tennisGame = new TennisGame(0, 0);

        $this->assertEquals("Love all", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function returnsFifteenLove ()
    {

        $tennisGame = new TennisGame(15, 0);

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenAll()
    {

        $tennisGame = new TennisGame(15, 15);

        $this->assertEquals("Fifteen all", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenThirty()
    {

        $tennisGame = new TennisGame(15, 30);

        $this->assertEquals("Fifteen - Thirty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsThirtyAll()
    {

        $tennisGame = new TennisGame(30, 30);

        $this->assertEquals("Thirty all", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsFifteenForty ()
    {

        $tennisGame = new TennisGame(15, 40);

        $this->assertEquals("Fifteen - Forty", $tennisGame->getScore());

    }

    public function returnsThirtyForty ()
    {

        $tennisGame = new TennisGame(30, 40);

        $this->assertEquals("Thirty - Forty", $tennisGame->getScore());

    }

    /**
     * @test
     */
    public function returnsDeuce ()
    {

        $tennisGame = new TennisGame(40, 40);

        $this->assertEquals("Deuce", $tennisGame->getScore());

    }


}
