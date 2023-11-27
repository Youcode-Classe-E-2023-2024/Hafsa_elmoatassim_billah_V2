<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $existingFirstName = $_POST['firstname'];
    $existingLastName = $_POST['lastname'];
    $existingEmail = $_POST['email'];
    $existingpassword = $_POST['password'];
    $existingconfirm_password = $_POST['confirm_password'];
    $existingrole = $_POST['role'];

    // Ensure the connection is open
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query for updating data in the 'contact' table
    $sql = "UPDATE users SET firstname='$existingFirstName', lastname='$existingLastName', email='$existingEmail', password='$existingpassword', confirm_password='$existingconfirm_password', role='$existingrole'  WHERE id=$id";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Record updated successfully, redirect to home
        header("location: readSp.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
