<?php
$servername = "localhost";

$username = "ddbs9259";
$password = "z6XAKkASrQrB84";
$dbname = "ddbs9259_db_ddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>