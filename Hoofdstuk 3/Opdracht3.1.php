<?php
/**
 * User:    Corné Bel
 * Date:    12-2-2020
 * Time:    09:15 AM
 * File:    Opdracht2.1.php
 */
include "../Hoofdstuk 2/Opdracht2.1.php"
?>

<?php
$freeze = "Alvestedetocht";
$distance = 200;
$course = "schaatstocht";
$ice = "natuurijs";
$association = "Koninklijke Vereniging De Friesche Elf Steden";
$city = "Leeuwarden";
$province = "Friesland";
$evenement = "Elfstedentocht";
$amount = 15;
$when = 1909;
$peryear = 1;

$verhaal = "<p>De <u>" . $evenement . "</u> (Fries: <u>" . $freeze . "</u>) is een <u>" . $distance . "</u> kilometer lange <u>" . $course .
            "</u> over <u>" . $ice . "</u> die wordt georganiseerd door de <u>" . $association . "</u>. <u>" . $city .
            "</u>, de hoofdstad van <u>" . $province . "</u>, is start- en aankomstplaats. De <u>" . $evenement . "</u> is inmiddels <u>" .
            $amount . "</u> maal verreden en werd voor het eerst in <u>" . $when . "</u> gereden en wordt maximaal <u>" . $peryear .
             "</u> keer per winter gehouden.</p>";
?>

<main id="wrapper">
    <h2>Uitwerking</h2>
    <?php
        echo $verhaal;
    ?>
</main>