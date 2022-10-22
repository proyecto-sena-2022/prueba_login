<?php
define('USER', 'root');
define('PASSWORD','');
define('HOST', 'host');
define('port', '3306');
define('DATABASE', 'usuarios');
define('servidor', '127.0.0.1');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>