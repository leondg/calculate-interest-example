<?php

namespace App\Service;

class Calculate
{
    public static function calculateInterestOverTime(int $amount, int $interest, int $maxYears): \Generator
    {
        $year = 0;
        $newAmount = 0;
        $interest = ($interest/100)+1;

        while ($year < $maxYears) {
            $year++;
            $newAmount = ($newAmount + $amount) * $interest;

            yield $year => $newAmount;
        }
    }
}