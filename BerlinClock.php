<?php

class BerlinClock
{
    public function simpleMinutes(int $minute):string{
        if($minute == 1 ||$minute%5==1) return "1000";
        if($minute == 2 ||$minute%5==2) return "1100";
        if($minute == 3 ||$minute%5==3) return "1110";
        return "0000";
    }
}