<?php

namespace App;

class Clock
{
    public function getCurrentTime()
    {
        return date("Y/m/d H:i:s");
    }
}