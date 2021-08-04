<?php

namespace PhpLogictest\Test;

use CalendarService;

require __DIR__ . "/model/Calendar.php";
require __DIR__ . "/service/CalendarService.php";
$data = [
    'Januari' => 1,
    'Febuari' => 2,
    'Maret' => 3
];
$tahun = 2021;
$calendarmodel = new Calendar();
$calendarService = new CalendarService($calendarmodel);
$januariarray = [];
$februariarray = [];
$maretarray = [];
$counter = $calendarService->getDaysTotal($data, $tahun);
function random_strings($length_of_string)
{
    $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str_number = "0123456789";
    return substr(
        str_shuffle($str_result . $str_number),
        0,
        $length_of_string
    );
}
for ($i = 1; $i <= $counter; $i++) {
    # code...
    if ($i > 31 && $i <= 59) {
        // echo $i . " Febuari" . random_strings(6) . "<br>";
        array_push($februariarray, random_strings(6));
    } else if ($i >= 60) {
        // echo $i . " Maret" . random_strings(6) . "<br>";
        array_push($maretarray, random_strings(6));
    } else {
        // echo $i . " Januari" . random_strings(6) . "<br>";
        array_push($januariarray, random_strings(6));
    }
}
$januari = $calendarService->draw_calendar($data['Januari'], $tahun, $januariarray);
$februari = $calendarService->draw_calendar($data['Febuari'], $tahun, $februariarray);
$maret = $calendarService->draw_calendar($data['Maret'], $tahun, $maretarray);


for ($i = 1; $i <= count($data); $i++) {
    // echo $i;
    if ($i == 1) {
        echo '
    <h2>januari 2021</h2>
    ';
        echo $januari;
    } else if ($i == 2) {
        echo '
            <h2>Febuari 2021</h2>
            ';
        echo $februari;
    } else {
        echo '
            <h2>Maret 2021</h2>
            ';
        echo $maret;
    }
}
echo "<script>
function myFunction(data) {
alert(data)  
}
</script>
";
