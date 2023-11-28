<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $newTitle = $_POST['new_title'];
    $newDescription = $_POST['new_description'];
    $newPrice = $_POST['new_price'];
    $newCategory = $_POST['new_category'];

    // Ensure the connection is open
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query for updating data in the 'contact' table
    $sql = "UPDATE contact SET title='$newTitle', description='$newDescription', price='$newPrice', category='$newCategory' WHERE id=$id";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Record updated successfully, redirect to home
        header("location: index.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
