<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL
    $conn = new mysqli("localhost", "root", "", "university_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and prevent SQL injection
    $full_name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Use prepared statement
    $stmt = $conn->prepare("INSERT INTO contact (full_name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $message);

    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
} else {
    die("Invalid request. Expected POST method but received " . $_SERVER["REQUEST_METHOD"]);
}

?>

