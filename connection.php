<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contactinfo';



$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    echo 'failed';  
}

// // Create connection
// // $conn = new mysqli($host, $username, $password ,$database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Create database
// $sql_create_database = "CREATE DATABASE IF NOT EXISTS $database";
// if ($conn->query($sql_create_database) === TRUE) {
//     // echo "Database created successfully<br>";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// // Select the database
// $conn->select_db($database);

// // Create table
// $sql_create_table = "CREATE TABLE IF NOT EXISTS contact (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     description TEXT,
//     price VARCHAR(255) NOT NULL ,
//     category VARCHAR(50)
// )";
// if ($conn->query($sql_create_table) === TRUE) {
//     // echo "Table 'contact' created successfully<br>";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// // Close the connection
// $conn->close();

 ?>
