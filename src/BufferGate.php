<?php

declare(strict_types=1);

namespace JanW\LogicGates;

class BufferGate implements LogicGateInterface
{
    public function __construct(
        private LogicGateInterface $input
    ) {
    }

    public function getOutput(): bool
    {
        return $this->input->getOutput();
    }
}
