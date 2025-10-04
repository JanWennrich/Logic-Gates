<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\OrGate;
use JanW\LogicGates\XnorGate;
use JanW\LogicGates\XorGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class XnorGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertTrue((new XnorGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertFalse((new XnorGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertFalse((new XnorGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new XnorGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
