<?php
require_once '../Includes/config.php';
if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 1) {
    header('Location: ../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete site</title>
</head>

<body>
    <form action="enquete_proces.php" method="POST">
        <input type="number" name="distance" placeholder="Afstand naar school" step=".01" required><br>
        <input type="number" name="traveltime" placeholder="Reistijd" required><br>

        <p>Welke voermiddel(en) gebruik je om naar het GLR te reizen?</p>
        <input type="checkbox" name="transportation[]" id="Lopend" value="Lopend">
        <label for="Lopend">Lopend</label>
        <input type="checkbox" name="transportation[]" id="Fietsend" value="Fietsend">
        <label for="Fietsend">Fietsend</label>
        <input type="checkbox" name="transportation[]" id="Trein" value="Trein">
        <label for="Trein">Trein</label>
        <input type="checkbox" name="transportation[]" id="Tram" value="Tram">
        <label for="Tram">Tram</label>
        <input type="checkbox" name="transportation[]" id="Metro" value="Metro">
        <label for="Metro">Metro</label>
        <input type="checkbox" name="transportation[]" id="Bus" value="Bus">
        <label for="Bus">Bus</label>
        <input type="checkbox" name="transportation[]" id="Auto" value="Auto">
        <label for="Auto">Auto</label>

        <p>Wat vind je van de begintijd van de lessen (8:15 uur)?</p>
        <input type="radio" name="starttime" id="tevroeg" value="Te vroeg">
        <label for="tevroeg">Te vroeg</label><br>
        <input type="radio" name="starttime" id="goed" value="Goed">
        <label for="goed">Goed</label><br>
        <input type="radio" name="starttime" id="telaat" value="Te laat">
        <label for="telaat">Te laat</label><br>

        <p>Wat vind je van de eindtijd van de lessen (17:15 uur)?</p>
        <input type="radio" name="endtime" id="tevroeg" value="Te vroeg">
        <label for="tevroeg">Te vroeg</label><br>
        <input type="radio" name="endtime" id="goed" value="Goed">
        <label for="goed">Goed</label><br>
        <input type="radio" name="endtime" id="telaat" value="Te laat">
        <label for="telaat">Te laat</label><br>

        <textarea cols='70' name='comments' maxlength='255'
            placeholder='Verdere Opmerkingen'></textarea><br>
        <input type="submit" value="Verzenden">
    </form>
</body>

</html>
