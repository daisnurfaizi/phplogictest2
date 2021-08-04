<?php

namespace PhpLogictest\Test;

use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    /**
     * @dataProvider dataDays
     */

    public function testgetTotalDays(int $month, int $year, int $expected)
    {
        $calendar = new Calendar();
        $days = $calendar->getTotalDays($month, $year);
        self::assertEquals($expected, $days);
    }

    public function dataDays()
    {
        return [
            [1, 2021, 31],
            [2, 2021, 28],
            [3, 2021, 31],

        ];
    }
}
