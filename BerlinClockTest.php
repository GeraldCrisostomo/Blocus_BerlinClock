<?php

require 'BerlinClock.php';
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function testSimpleMinutesC1(){
        $minute = new BerlinClock();
        $actual= $minute->simpleMinutes(0);
        $this->assertEquals('0000', $actual);
    }

    public function testSimpleMinutesC2(){
        $minute = new BerlinClock();
        $actual= $minute->simpleMinutes(1);
        $this->assertEquals('1000', $actual);
    }

    public function testSimpleMinutesC3(){
        $minute = new BerlinClock();
        $actual= $minute->simpleMinutes(7);
        $this->assertEquals('1100', $actual);
    }


}
