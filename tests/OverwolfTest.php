<?php

declare(strict_types = 1);

namespace Overwolf\PhpBootstrapTest;

use Overwolf\PhpBootstrap\Codelyber;
use PHPUnit\Framework\TestCase;

final class OverwolfTest extends TestCase
{
    /** @var Overwolf */
    private $codelyber;

    /** @var string */
    private $greeting;

    public function tearDown()
    {
        parent::tearDown();

        $this->codelyber = null;
        $this->greeting = null;
    }

    /** @test */
    public function shouldSayHelloWhenGreeting()
    {
        $this->givenACodelyber();

        $this->whenItGreets();

        $this->thenItShouldSayCodelyTv();
    }

    private function givenACodelyber()
    {
        $this->codelyber = new Overwolf("Victor");
    }

    private function whenItGreets()
    {
        $this->greeting = $this->codelyber->greet();
    }

    private function thenItShouldSayCodelyTv()
    {
        $this->assertEquals("Overwolf", $this->greeting);
    }
}
