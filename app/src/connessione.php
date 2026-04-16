<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "pagina db";
$host = 'db';
$db   = 'ecommerce_pokemon';
$user = 'pokemon';
$pass = 'pokemon';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        
        
    ]);
    
    //var_dump($pdo);
} catch (PDOException $e) {
    die("Errore connessione: " . $e->getMessage());
}