<?php
$host = "127.0.0.1:3306";
$user = "root";
$password = "";
$database = "personal_info_db";
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>