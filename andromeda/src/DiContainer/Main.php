<?php

namespace App\DiContainer;

class Main
{
    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * インターフェースをDI
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function outputData()
    {
        return $this->output->output();
    }
}
