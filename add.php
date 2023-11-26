<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    if (empty($title) || empty($description) || empty($price) || empty($category) ) {
        echo "All inputs fields are required!";
        exit();
    }

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

