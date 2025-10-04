<?php

declare(strict_types=1);

namespace JanW\LogicGates;

class NimplyGate implements LogicGateInterface
{
    private LogicGateInterface $outputGate;

    public function __construct(
        LogicGateInterface $inputA,
        LogicGateInterface $inputB,
    ) {
        $this->outputGate = new NotGate(
            new ImplyGate($inputA, $inputB),
        );
    }

    public function getOutput(): bool
    {
        return $this->outputGate->getOutput();
    }
}
