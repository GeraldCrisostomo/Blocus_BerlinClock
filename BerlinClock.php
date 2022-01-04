<?php

class BerlinClock
{
    public function simpleMinutes(int $minute):string{
        if($minute == 1 ||$minute%5==1) return "1000";
        if($minute == 2 ||$minute%5==2) return "1100";
        if($minute == 3 ||$minute%5==3) return "1110";
        if($minute == 4 ||$minute%5==4) return "1111";
        return "0000";
    }

    public function bloc5Minutes(int $minute):string{
        if($minute/5 > 1 && $minute/5 < 2 ) return "100000000000";
        return "000000000000";
    }
}