<?php

declare(strict_types=1);

namespace JanW\LogicGates;

class AndGate implements LogicGateInterface
{
    public function __construct(
        private LogicGateInterface $inputA,
        private LogicGateInterface $inputB,
    ) {
    }

    public function getOutput(): bool
    {
        return $this->inputA->getOutput() && $this->inputB->getOutput();
    }
}
