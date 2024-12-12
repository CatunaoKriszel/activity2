<?php
$host = 'localhost';
$user = 'saysay';
$password = 'catunao';
$database = 'crud_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
