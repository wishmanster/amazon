<?php
$servername = "localhost";
$username = "user";
$password = "CLX2GweFNVs4N8G9";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>