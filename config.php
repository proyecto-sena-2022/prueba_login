<?php
define('USER', 'root');
define('PASSWORD','');
define('HOST', 'host');
define('port', '3300');
define('DATABASE', 'usu');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>