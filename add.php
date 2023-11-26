<?php
include "connection.php";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';

    $sql = "INSERT INTO contact (title, description, price, category) VALUES ('$title', '$description', $price, '$category')";

    if ($conn->query($sql)) {
        echo "Records added successfully.";
        header("location: read.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

