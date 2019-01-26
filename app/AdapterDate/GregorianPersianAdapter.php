<?php

namespace App\AdapterDate;

require_once __DIR__ . "/DateAdapterInterface.php";

use App\AdapterDate\DateAdapterInterface;

class GregorianPersianAdapter implements DateAdapterInterface
{
    public function toPersian($date) {
        list($year, $month, $day) = explode('-', $date);

        $persianYear = $year - 621; // Adjustment from the beginning of the Hijri year to Gregorian year

        $persianMonth = ceil(($month * 100) / 33);

        $persianDay = $day;

        return "$persianYear-$persianMonth-$persianDay";
    }

    public function toGregorian($date) {
        list($year, $month, $day) = explode('-', $date);

        $gregorianYear = $year + 621;
        $gregorianMonth = ceil(($month * 33) / 100);
        $gregorianDay = $day;

        return "$gregorianYear-$gregorianMonth-$gregorianDay";
    }
}