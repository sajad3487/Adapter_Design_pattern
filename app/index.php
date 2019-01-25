<?php
namespace App;

require_once __DIR__ . "/AdapterDate/GregorianPersianAdapter.php";

use App\AdapterDate\GregorianPersianAdapter;

$gregorianDate = '2024-05-15';
$persianAdapter = new GregorianPersianAdapter();
$persianDate = $persianAdapter->toPersian($gregorianDate);
echo "Gregorian date {$gregorianDate} converted to Persian date: {$persianDate}\n";

$persianDate = '1403-02-25';
$gregorianAdapter = new GregorianPersianAdapter();
$gregorianDate = $gregorianAdapter->toGregorian($persianDate);
echo "Persian date {$persianDate} converted back to Gregorian date: {$gregorianDate}\n";
