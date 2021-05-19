<?php
session_start();
session_regenerate_id();
error_reporting(E_ALL);
ini_set('display_errors', '0');

$dsn = "mysql:host=localhost;dbname=examen";
$DB_username = "zegert";
$DB_password = "3312lr2001";

try {
    $conn = new PDO($dsn, $DB_username, $DB_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo "Geen connectie mogelijk. Error: " . $e->getMessage();
}
?>