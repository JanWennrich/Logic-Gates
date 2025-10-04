<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\AndGate;
use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\ImplyGate;
use JanW\LogicGates\NandGate;
use JanW\LogicGates\NimplyGate;
use JanW\LogicGates\NorGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class NimplyGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new NimplyGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new NimplyGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertTrue((new NimplyGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new NimplyGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
