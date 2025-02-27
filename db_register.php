<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password is empty
$database = "student_db"; // Change this to your actual database name

// Create connection
$conn = new mysqli("localhost", "root", "", "contact_form_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
