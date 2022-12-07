<?php
$host = 'localhost';
$db = 'homeplants';
$user = 'root';
$pass = '';
$charset = 'utf8';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass);
echo "its ok";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




?>