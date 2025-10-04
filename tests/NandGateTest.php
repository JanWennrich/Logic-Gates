<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\AndGate;
use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\NandGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class NandGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertTrue((new NandGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new NandGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertTrue((new NandGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new NandGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
