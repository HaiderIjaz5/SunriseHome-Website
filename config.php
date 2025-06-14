<?php
// Database connection settings
$host = "localhost";  // Replace with your host (e.g., "localhost:3307" if using port 3307)
$dbname = "realestate";  // Replace with your database name
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password

try {
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    die("Database connection failed: " . $e->getMessage());
}
?>
