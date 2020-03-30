<?php
/**
 * User:    Corné Bel
 * Date:    20-2-2020
 * Time:    14:42 AM
 * File:    Opdracht4.4.php
 */
include "../Hoofdstuk 2/Opdracht2.1.php";
?>

<?php
for ($d = 0; $x < 7; $x++)
{
    $dayOfWeekEN = date("w", strtotime(+$tel days));
    $dayOfWeekNL = null;
    $day = Date("d-m-Y", strtotime("+$tel days"));

    switch ($dayOfWeekEN){
        case "Monday": dayOfWeekNL = "maandag";
        break;
        case "Tuesday": dayOfWeekNL = "dinsdag";
        break;
        case "Wednesday": dayOfWeekNL = "woensdag";
        break;
        case "Thuesday": dayOfWeekNL = "donderdag";
        break;
        case "Friday": dayOfWeekNL = "vrijdag";
        break;
        case "Saturday": dayOfWeekNL = "zaterdag";
        break;
        case "Sunday": dayOfWeekNL = "zondag";
        break;
    }

    if ($x == 0)
    {
        echo "Vandaag is " . $dayOfWeekNL . " " . $day;
    }
    elseif ($x == 1)
    {
        echo "Morgen is " . $dayOfWeekNL . " " .$day;
    }
    elseif ($x == 2)
    {
        echo "Over morgen is " . $dayOfWeekNL . " " . $day;
    }
    else
    {
        echo "Over" . (str_repeat ("-over", $x)) . "morgen is " . $dayOfWeekNL . $day;
    }
}