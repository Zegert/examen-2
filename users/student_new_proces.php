<?php
require('../Includes/config.php');

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    try {
        $stmt = $conn->prepare("INSERT INTO studenten(ID, Username, Password, Class, Firstname, Lastname, Adress, PostalCode, City, Age, email, Rang, Enquete)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([null, $_POST['username'], $password, $_POST['class'], $_POST['firstname'], $_POST['lastname'], $_POST['adress'], $_POST['postalcode'], $_POST['city'], $_POST['age'], $_POST['email'], 1, NULL]);
    } catch (PDOException $e) {
        echo "Nieuwe gebruiker niet toegevoegd. Error: " . $e;
    }
    header("Location:../index.php");
}
