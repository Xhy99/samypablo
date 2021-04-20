<?php
define('USER', 'admin');
define('PASSWORD', '123');
define('HOST', 'localhost');
define('DATABASE', 'dumbitdb');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
