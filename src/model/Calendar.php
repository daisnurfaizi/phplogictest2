<?php

namespace PhpLogictest\Test;

class Calendar
{
    private string $Calendar;
    public function __construct()
    {
        $this->Calendar = CAL_GREGORIAN;
    }

    public function getTotalDays($month, $year)
    {
        $calendar = $this->Calendar;
        $month = date($month);
        $year = date($year);
        $days = cal_days_in_month($calendar, $month, $year);
        return $days;
    }
}
