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
        return $this->bloc5minutesRefactor($minute);
    }

    public function bloc5minutesRefactor(int $minute): string
    {
        $quotient = floor($minute / 5);

        $reste = 12 - $quotient;
        $string = '';
        for ($i = 0; $i < $quotient; $i++) {
            $string .= '1';
        }
        for ($i = 0; $i < $reste; $i++) {
            $string .= '0';
        }
        return "$string";
    }

    public function simpleHour(int $hour){
        if($hour == 1 || $hour%5==1) return '1000';
        if($hour == 2 || $hour%5==2) return '1100';
        if($hour == 3 || $hour%5==3) return '1110';
        if($hour == 4 || $hour%5==4) return '1111';
        return '0000';
    }

    public function bloc5Hour(int $hour){
        if(floor($hour/5) == 1) return '1000';
        if(floor($hour/5) == 2) return '1100';
        if(floor($hour/5) == 3) return '1110';
        if(floor($hour/5) == 4) return '1111';
        return '0000';
    }

}