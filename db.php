<?php
// db.php
$servername = "localhost";
$username = "root"; // Your database username
$password = "root"; // Your database password
$dbname = "travel_management_system"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

