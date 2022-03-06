<?php

//Server information
$server_user = "";
$server_pwd = '';
$server_host = '';
$server_db =  '';


$connectionString = "mysql:host=" . $server_host . ";dbname=" . $server_db . ";charset=UTF8";

try {
    $pdo = new PDO($connectionString, $server_user, $server_pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('Connected Succesfully');</script>";
} catch (PDOException $error) {
    echo 'Connection Fail: ' . $error->getMessage();
}
