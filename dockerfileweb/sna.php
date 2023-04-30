<?php
$host = '172.17.0.2';
$dbname = 'ujiansna';
$username = 'root';
$password = 'abcdefgh';
$port = 3306 ;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}