<?php
$host = '139.59.235.179';
$port = '5432';
$dbname = 'keswa';
$user = 'keswa';
$password = '@#Keswa123';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

try {
    $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>