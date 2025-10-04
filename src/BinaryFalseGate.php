<?php

declare(strict_types=1);

namespace JanW\LogicGates;

class BinaryFalseGate implements LogicGateInterface
{
    public function getOutput(): bool
    {
        return false;
    }
}
