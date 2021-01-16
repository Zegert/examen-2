<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak een nieuwe gebruiker aan.</title>
</head>

<body>
    <form action="student_new_proces.php" method="POST">
        <input type="text" name="username" placeholder="Gebruikersnaam" required><br>
        <input type="password" name="password" placeholder="Wachtwoord" required><br>
        <input type="text" name="class" placeholder="Klas" required><br>
        <input type="text" name="firstname" placeholder="Voornaam" required><br>
        <input type="text" name="lastname" placeholder="Achternaam" required><br>
        <input type="text" name="adress" placeholder="Adres" required><br>
        <input type="text" name="postalcode" placeholder="Postcode" required><br>
        <input type="text" name="city" placeholder="Woonplaats" required><br>
        <input type="number" name="age" placeholder="Leeftijd" required><br>
        <input type="email" name="email" placeholder="Emailadres" required><br>
        <input type="submit" value="Verzenden">
    </form>
</body>

</html>