<?php

namespace App\DiContainer;

use Pimple\Container;
use App\DiContainer\OutputArray;

class AppContainer
{
    public function getOutputObject()
    {
        $container['output'] = function ($c) {
            return new OutputArray();
        };
        return $container['output'];
    }
}
