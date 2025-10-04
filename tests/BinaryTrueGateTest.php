<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryTrueGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BinaryTrueGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertTrue((new BinaryTrueGate())->getOutput());
    }
}
