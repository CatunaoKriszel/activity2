<?php
$host = 'localhost';
$user = 'astraea';
$password = 'Catunao@01';
$database = 'app';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
