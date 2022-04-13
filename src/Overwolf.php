<?php

declare(strict_types = 1);

namespace Overwolf\PhpBootstrap;

final class Overwolf
{
    /** string */
    private const GREETING = "overwolf";

    /** @var string */
    private $name;

    public function __construct(string $aName)
    {
        $this->name = $aName;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function greet(): string
    {
        return self::GREETING;
    }
}
