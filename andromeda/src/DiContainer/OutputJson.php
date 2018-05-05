<?php

namespace App\DiContainer;

class OutputJson implements OutputInterface
{
    public function output()
    {
        $json = '{"a":1, "b":2, "c":3}';
        return $json;
    }
}
