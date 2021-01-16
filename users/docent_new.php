<?php
require('../Includes/config.php');
if (!isset($_SESSION['rang']) || $_SESSION['rang'] < 3) {
    header('Location: ../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak een nieuwe gebruiker aan.</title>
</head>

<body>
    <form action="docent_new_proces.php" method="POST">
        <input type="text" name="username" placeholder="Gebruikersnaam"><br>
        <input type="password" name="password" placeholder="Wachtwoord"><br>
        <input type="number" name="rang" placeholder="rang" maxlength="1"><br>
        <input type="submit" value="Verzenden">
    </form>
</body>

</html>