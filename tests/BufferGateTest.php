<?php

declare(strict_types=1);

namespace JanW\LogicGates\Test;

use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;
use JanW\LogicGates\BufferGate;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BufferGateTest extends TestCase
{
    #[Test]
    public function test(): void
    {
        Assert::assertFalse((new BufferGate(new BinaryFalseGate()))->getOutput());
        Assert::assertTrue((new BufferGate(new BinaryTrueGate()))->getOutput());
    }
}
