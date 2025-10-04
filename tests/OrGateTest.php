<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\OrGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class OrGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new OrGate(new BinaryFalseGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new OrGate(new BinaryFalseGate(), new BinaryTrueGate()))->getOutput());
        Assert::assertTrue((new OrGate(new BinaryTrueGate(), new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new OrGate(new BinaryTrueGate(), new BinaryTrueGate()))->getOutput());
    }
}
