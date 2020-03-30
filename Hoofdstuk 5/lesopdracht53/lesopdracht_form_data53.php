<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
/**
 * User:    Corné Bel
 * Date:    12-2-2020
 * Time:    16:00
 * File:    lesopdracht_form_data53.php
 */

include "lesopdracht_functions53.php";
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td><?php
            echo $_GET['firstname'];
        ?></td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td><?php
            if(['tussenvoegsel'])
            {
                echo "tussenvoegsel";
            }
            if(!empty("tussenvoegsel"))
            {
                echo "";
            }
        ?></td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td><?php
            echo $_GET['lastname'];
        ?></td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td><?php
            getTeacherName();
        ?></td>
    </tr>
</table>