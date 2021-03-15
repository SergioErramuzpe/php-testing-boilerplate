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
        $tennisGame = new TennisGame();

        $this->assertEquals("Love all", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function returnsFifteenLove ()
    {

        $tennisGame = new TennisGame();

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());

    }


}
