<?php

declare(strict_types=1);

namespace JanW\LogicGates;

class BinaryTrueGate implements LogicGateInterface
{
    public function getOutput(): bool
    {
        return true;
    }
}
