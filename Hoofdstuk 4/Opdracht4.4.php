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
for ($tel = 0; $tel < 7; $tel++)
{
    $dayOfWeekEN = Date("w", strtotime("+$tel days"));
    $dayOfWeekNL = null;
    $day = Date("d-m-Y", strtotime("+$tel days"));

    switch ($dayOfWeekEN){
        case "Monday": $dayOfWeekNL = "maandag";
        break;
        case "Tuesday": $dayOfWeekNL = "dinsdag";
        break;
        case "Wednesday": $dayOfWeekNL = "woensdag";
        break;
        case "Thuesday": $dayOfWeekNL = "donderdag";
        break;
        case "Friday": $dayOfWeekNL = "vrijdag";
        break;
        case "Saturday": $dayOfWeekNL = "zaterdag";
        break;
        case "Sunday": $dayOfWeekNL = "zondag";
        break;
    }

    if ($tel == 0)
    {
        echo "Vandaag is " . $dayOfWeekNL . " " . $day;
    }
    elseif ($tel == 1)
    {
        echo "Morgen is " . $dayOfWeekNL . " " .$day;
    }
    elseif ($tel == 2)
    {
        echo "Over morgen is " . $dayOfWeekNL . " " . $day;
    }
    else
    {
        echo "Over" . (str_repeat ("-over", $tel)) . "morgen is " . $dayOfWeekNL . $day;
    }
    echo "<br />";
}