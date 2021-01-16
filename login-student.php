<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login_verwerk.php" method="POST" class="form_big">
        <h3 id="login_header">Inloggen Enquetesite:</h3>
        <label for="inputUsername">
            <!-- <p class="label">Gebruikersnaam:</p> -->
        </label>
        <input type="text" class="input" name="inputUsername" id="inputUsername" value="" autocomplete="username"
            placeholder="Gebruikersnaam..."><br>

        <label for="inputPassword">
            <!-- <p class="label">Wachtwoord:</p> -->
        </label>
        <input type="password" class="input" name="inputPassword" id="inputPassword" value=""
            autocomplete="current-password" placeholder="Wachtwoord..."><br>

        <input type="submit" class="input" id="submit" value="Login" name="submit">
    </form>
</body>

</html>