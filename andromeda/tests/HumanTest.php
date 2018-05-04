<?php

use App\Human;
use App\Clock;
use PHPUnit\Framework\TestCase;

class HumanTest extends TestCase
{
    public function testSayTime()
    {
        $stub = $this->createMock(Clock::class);
        $stub->method('getCurrentTime')
            ->willReturn('2018/05/04 12:00:00');

        $human = new Human($stub);
        $result = $human->sayTime();

        $this->assertEquals($result, '現在日時は2018/05/04 12:00:00です。');
    }
}
