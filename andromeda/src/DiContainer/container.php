<?php

use Pimple\Container;
use App\DiContainer\OutputArray;

$container = new Container();

$container['output'] = function ($c) {
    return new OutputArray();
};
