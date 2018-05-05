<?php

use PHPUnit\Framework\TestCase;
use App\DiContainer\Main;
use App\DiContainer\OutputArray;
use App\DiContainer\OutputJson;

class MainTest extends TestCase
{
    public function testOutputData()
    {
        $main = new Main(new OutputJson());
        var_dump($main->outputData());
    }
}
