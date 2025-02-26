<?php
$host = "localhost"; // Change if using a remote server
$user = "root"; // Default XAMPP user
$pass = ""; // Default XAMPP password (leave blank)
$dbname = "contact_form_db"; // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
