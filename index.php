<html lang="en">
<head>
</head>

<body>
	<div id="container">
		<form action="login-handler.php" method="POST" class="form_big">
			<h3 id="login_header">Inloggen Vaarploeglog:</h3>
			<label for="inputUsername">
				<!-- <p class="label">Gebruikersnaam:</p> -->
			</label>
			<input type="text" class="input" name="inputUsername" id="inputUsername" value="" autocomplete="username" placeholder="Gebruikersnaam..." ><br>

			<label for="inputPassword">
				<!-- <p class="label">Wachtwoord:</p> -->
			</label>
			<input type="password" class="input" name="inputPassword" id="inputPassword" value="" autocomplete="current-password"
				placeholder="Wachtwoord..."><br>

			<input type="submit" class="input" id="submit" value="Login" name="submit"><br>
            <a href="users/student_new.php">Nog geen account?</a>
		</form>
	</div>
</body>

</html>