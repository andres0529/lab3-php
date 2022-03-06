<?php
require_once 'config.inc.php';

$clubName = $_POST["clubName"];
$ground = trim($_POST["ground"]);

$query = "INSERT INTO clubs (clubName, ground) 
VALUES(:clubName, :ground);";
$stmt = $pdo->prepare($query);
$stmt->bindParam('clubName', $clubName, PDO::PARAM_STR);
$stmt->bindParam('ground', $ground, PDO::PARAM_STR);
if ($stmt->execute()) {
    header("location: ./../home.php");
} else {
    header("location: ./../home.php?ERROR");
}