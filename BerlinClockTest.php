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

    public function testSimpleMinutesC4(){
        $minute = new BerlinClock();
        $actual= $minute->simpleMinutes(8);
        $this->assertEquals('1110', $actual);
    }

    public function testSimpleMinutesC5(){
        $minute = new BerlinClock();
        $actual= $minute->simpleMinutes(9);
        $this->assertEquals('1111', $actual);
    }

    public function testBloc5MinutesC1(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(3);
        $this->assertEquals('0000000000000', $actual);
    }

    public function testBloc5MinutesC2(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(7);
        $this->assertEquals('100000000000', $actual);
    }


}
