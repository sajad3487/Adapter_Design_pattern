<?php

namespace App\AdapterDate;

interface DateAdapterInterface
{
    public function toPersian($date);
    public function toGregorian($date);
}