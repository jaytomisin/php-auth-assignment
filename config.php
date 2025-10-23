<?php

$dsn = "mysql:host=local; dbname=php_auth_db";
$dbusername = "root";
$dbpassword = "";

try {
     $pdo = new PDO($dsn,$dbusername, $dbpassword);
     $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)
} catch (PDOException $e) {
      echo "connection failed: " . $e->getMessage();
}
