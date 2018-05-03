<?php

use App\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testCalc()
    {
        $sample = new Sample();
        $result = $sample->calc(10);

        $this->assertEquals(1000, $result);
    }
}
