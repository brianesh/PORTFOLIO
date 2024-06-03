<?php
// Include database connection file
include_once 'db_connect.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to success page or display success message
        header("Location: thank_you.html");
        exit();
    } else {
        // Redirect to error page or display error message
        header("Location: error.html");
        exit();
    }
}