<?php

include 'connection.php';
$result = $pdo->query("SELECT * FROM catalog");
$data = $result->fetchAll();

?>