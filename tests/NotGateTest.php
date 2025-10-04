<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\NotGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class NotGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new NotGate(new BinaryTrueGate()))->getOutput());
        Assert::assertTrue((new NotGate(new BinaryFalseGate()))->getOutput());
    }
}
