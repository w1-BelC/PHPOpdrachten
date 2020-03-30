<?php
/**
 * User:    Corné Bel
 * Date:    12-2-2020
 * Time:    09:15 AM
 * File:    Opdracht5.1.php
 */
include "../Hoofdstuk 2/Opdracht2.1.php"
?>

<div>
    <h1>
        RESTARIA KEES KROKET
    </h1>
    <p>
        Visstraat 12 <br>
        5211 DN 's-Hertogenbosch <br>
        073 613 6720 <br>
        info@restariakeeskroket.nl <br>
    </p>
    <form action="form_data.php" method="get">
        <label for="companyName">Bedrijfsnaam</label> <br>
        <input type="text" id="companyName" name="companyName"> <br>
        <label for="firstName">Voornaam</label> <br>
        <input type="text" id="firstName" name="firstName"> <br>
        <label for="lastName">Achternaam</label> <br>
        <input type="text" id="lastName" name="lastName"> <br>
        <label for="phoneNumber">Telefoonnummer</label> <br>
        <input type="number" id="phoneNumber" name="phoneNumber"> <br>
        <label for="e-mail">E-mail</label> <br>
        <input type="email" id="e-mail" name="e-mail"> <br>
        <label for="message">Bericht</label> <br>
        <input type="text" id="message" name="message"> <br><br>
        <input type="submit" value="Versturen">
    </form>