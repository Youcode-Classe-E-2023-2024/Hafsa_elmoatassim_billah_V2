<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $newFirstName = $_POST['new_firstname'];
    $newLastName = $_POST['new_lastname'];
    $newEmail = $_POST['new_email'];
    $newCategory = $_POST['new_category'];

    $sql = "UPDATE contact SET 
            firstname='$newFirstName', 
            lastname='$newLastName', 
            email='$newEmail', 
            catégorie='$newCategory' 
            WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Announcement updated successfully";
        // Redirect back to the read.php page after a short delay
        echo '<meta http-equiv="refresh" content="2;url=read.php">';
    } else {
        echo "Error updating announcement: " . $conn->error;
    }
}
?>
