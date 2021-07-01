<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'devoir1';
$charset = 'utf8mb4';
    $db = "mysql:host=".$serverName.";dbname=".$dbName.";password=".$password.";charset=".$charset;
    $pdo = new PDO($db,$userName,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   