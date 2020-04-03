<?php
/**
 * User:    Corné Bel
 * Date:    12-2-2020
 * Time:    09:15 AM
 * File:    Opdracht5.1.php
 */
include "../Hoofdstuk 2/Opdracht2.1.php"
?>

<?php
$trafficLightColor = "Groen";
$ambulanceComing = false;
$driveOn = true;

if ($ambulanceComing == true)
{
    $driveOn = false;
    echo "U moet stoppen";
}

else if ($trafficLightColor == "Groen")
{
    $driveOn = true;
    echo "U mag doorrijden";
}

else
{
    echo "U moet stoppen";
}
?>

<?php
$countryName = "";
$currentAge = 16;

if ($countryName == "Zweden" && $currentAge == 19)
{
    echo "Je woont in Zweden en je bent " . $currentAge . " jaar oud.";
    echo "Je mag hier zwakke alcohol drinken";
}

else if ($countryName == "Cyprus" && $currentAge == 17)
{
    echo "Je woont in Cyprus en je bent" . $currentAge . " jaar oud.";
    echo "Je mag hier alle alcoholpromillage drinken";
}

else
{
    echo "Je woont in Nederland en je bent ". $currentAge ." jaar oud.";
    echo "Je mag hier geen alcohol drinken";
}