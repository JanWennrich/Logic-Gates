<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\AndGate;
use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\NandGate;
use JanW\LogicGates\NorGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class NorGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertTrue((new NorGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new NorGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertFalse((new NorGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new NorGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
