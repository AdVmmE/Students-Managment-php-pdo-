<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException  $e) {
    echo "Erreur de connexion: " . $e->getMessage();
    exit;
}