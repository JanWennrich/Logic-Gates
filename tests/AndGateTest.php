<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\AndGate;
use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class AndGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new AndGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new AndGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertFalse((new AndGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new AndGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
