<?php
require 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contact WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // echo "Announcement deleted successfully";
        // echo '<meta http-equiv="refresh" content="2;url=read.php">';
        header("location: read.php");  
    } else {
        echo "Error deleting announcement: " . $conn->error;
    }
}
?>

