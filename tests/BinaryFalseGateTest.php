<?php

declare(strict_types=1);

namespace JanW\LogicGates;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BinaryFalseGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new BinaryFalseGate())->getOutput());
    }
}
