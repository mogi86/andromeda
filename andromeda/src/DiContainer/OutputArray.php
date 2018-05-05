<?php

namespace App\DiContainer;

class OutputArray implements OutputInterface
{
    public function output()
    {
        return [
            'a' => 1,
            'b' => 2,
            'c' => 3,
        ];
    }
}
