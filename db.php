<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "gate_pass_system";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>