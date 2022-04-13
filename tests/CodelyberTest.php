<?php

declare(strict_types = 1);

namespace Overwolf\PhpBootstrapTest;

use Overwolf\PhpBootstrap\Over;
use PHPUnit\Framework\TestCase;

final class OverTest extends TestCase
{
    /** @var Over */
    private $over;

    /** @var string */
    private $greeting;

    public function tearDown()
    {
        parent::tearDown();

        $this->over = null;
        $this->greeting = null;
    }

    /** @test */
    public function shouldSayHelloWhenGreeting()
    {
        $this->givenAOver();

        $this->whenItGreets();

        $this->thenItShouldSayOver();
    }

    private function givenAOver()
    {
        $this->over = new Over("Victor");
    }

    private function whenItGreets()
    {
        $this->greeting = $this->over->greet();
    }

    private function thenItShouldSayOver()
    {
        $this->assertEquals("Overwolf", $this->greeting);
    }
}
