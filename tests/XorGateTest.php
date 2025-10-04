<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\OrGate;
use JanW\LogicGates\XorGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class XorGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new XorGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new XorGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertTrue((new XorGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new XorGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
