<?php
require_once 'config.inc.php';

$clubId = $_POST["clubId"];

$query = "DELETE FROM clubs WHERE clubId=:clubId;";


$stmt = $pdo->prepare($query);
$stmt->bindParam('clubId', $clubId, PDO::PARAM_STR);

if ($stmt->execute()) {
    header("location: ./../home.php");
} else {
    header("location: ./../home.php?ERROR");
}
