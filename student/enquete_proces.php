<?php
require '../Includes/config.php';
$transportation = implode(' , ', $_POST['transportation']);

try {
    $stmt = $conn->prepare("INSERT INTO Enquete(ID, StudentID, Distance, Traveltime, Transportation, Starttime, Endtime, Comments)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([null, $_SESSION['ID'], $_POST['distance'], $_POST['traveltime'], $transportation, $_POST['starttime'], $_POST['endtime'], $_POST['comments']]);
} catch (PDOException $e) {
    echo "Enquete niet toegevoegd. Error: " . $e;
}
header("Location:../index.php");
