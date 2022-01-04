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
        $this->assertEquals('000000000000', $actual);
    }

    public function testBloc5MinutesC2(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(7);
        $this->assertEquals('100000000000', $actual);
    }

    public function testBloc5MinutesC3(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(12);
        $this->assertEquals('110000000000', $actual);
    }

    public function testBloc5MinutesC4(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(16);
        $this->assertEquals('111000000000', $actual);
    }

    public function testBloc5MinutesC5(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(20);
        $this->assertEquals('111100000000', $actual);
    }

    public function testBloc5MinutesC6(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(27);
        $this->assertEquals('111110000000', $actual);
    }

    public function testBloc5MinutesC7(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(32);
        $this->assertEquals('111111000000', $actual);
    }

    public function testBloc5MinutesC8(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(37);
        $this->assertEquals('111111100000', $actual);
    }

    public function testBloc5MinutesC9(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(42);
        $this->assertEquals('111111110000', $actual);
    }

    public function testBloc5MinutesC10(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(47);
        $this->assertEquals('111111111000', $actual);
    }

    public function testBloc5MinutesC11(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(53);
        $this->assertEquals('111111111100', $actual);
    }

    public function testBloc5MinutesC12(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(57);
        $this->assertEquals('111111111110', $actual);
    }

    public function testBloc5MinutesC13(){
        $minute = new BerlinClock();
        $actual= $minute->bloc5Minutes(60);
        $this->assertEquals('111111111111', $actual);
    }

    public function testSimpleHoursC1(){
        $hour = new BerlinClock();
        $actual= $hour->simpleHour(0);
        $this->assertEquals('0000', $actual);
    }

    public function testSimpleHoursC2(){
        $hour = new BerlinClock();
        $actual= $hour->simpleHour(1);
        $this->assertEquals('1000', $actual);
    }

    public function testSimpleHoursC3(){
        $hour = new BerlinClock();
        $actual= $hour->simpleHour(7);
        $this->assertEquals('1100', $actual);
    }

    public function testSimpleHoursC4(){
        $hour = new BerlinClock();
        $actual= $hour->simpleHour(18);
        $this->assertEquals('1110', $actual);
    }

    public function testSimpleHoursC5(){
        $hour = new BerlinClock();
        $actual= $hour->simpleHour(24);
        $this->assertEquals('1111', $actual);
    }

    public function testBloc5HoursC1(){
        $hour = new BerlinClock();
        $actual= $hour->bloc5Hour(4);
        $this->assertEquals('0000', $actual);
    }

    public function testBloc5HoursC2(){
        $hour = new BerlinClock();
        $actual= $hour->bloc5Hour(5);
        $this->assertEquals('1000', $actual);
    }

    public function testBloc5HoursC3(){
        $hour = new BerlinClock();
        $actual= $hour->bloc5Hour(11);
        $this->assertEquals('1100', $actual);
    }

    public function testBloc5HoursC4(){
        $hour = new BerlinClock();
        $actual= $hour->bloc5Hour(17);
        $this->assertEquals('1110', $actual);
    }

    public function testBloc5HoursC5(){
        $hour = new BerlinClock();
        $actual= $hour->bloc5Hour(24);
        $this->assertEquals('1111', $actual);
    }

    public function testSecondEven(){
        $second = new BerlinClock();
        $actual= $second->seconds(22);
        $this->assertEquals('1',$actual);
    }

    public function testSecondOdd(){
        $second = new BerlinClock();
        $actual= $second->seconds(59);
        $this->assertEquals('0',$actual);
    }

    public function testBerlinClock(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->BerlinClock_final(12,30,20);
        $this->assertEquals('1 1100 1100 111111000000 0000', $actual);
    }
}
