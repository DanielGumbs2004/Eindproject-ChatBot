<?php

$host = 'localhost';
$db = 'jarvis-chat';
$user = 'jarvis-chat';
$password = 'YOUG3bon-kah6trut';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);

?>
