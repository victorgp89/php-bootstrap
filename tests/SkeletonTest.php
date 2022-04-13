<?php

declare(strict_types = 1);

namespace Overwolf\PhpBootstrapTest;

use Overwolf\PhpBootstrap\Skeleton;
use PHPUnit\Framework\TestCase;

final class SkeletonTest extends TestCase
{
    /** @var Skeleton */
    private $skeleton;

    /** @var string */
    private $greeting;

    public function tearDown()
    {
        parent::tearDown();

        $this->skeleton = null;
        $this->greeting = null;
    }

    /** @test */
    public function shouldSayHelloWhenGreeting()
    {
        $this->givenACodelyber();

        $this->whenItGreets();

        $this->thenItShouldSayGiant();
    }

    private function givenACodelyber()
    {
        $this->skeleton = new Skeleton("Victor");
    }

    private function whenItGreets()
    {
        $this->greeting = $this->skeleton->greet();
    }

    private function thenItShouldSayGiant()
    {
        $this->assertEquals("Giant", $this->greeting);
    }
}
