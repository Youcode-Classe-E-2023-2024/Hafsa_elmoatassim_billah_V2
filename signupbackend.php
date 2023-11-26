<?php 

require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "All inputs fields are required!";
    exit();
}

if ($password != $confirm_password) {
    echo "Passwords do not match";
    exit();
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$hashed_password2 = password_hash($confirm_password, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password , confirm_password) VALUES (?, ?, ?, ?,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $hashed_password2);

if ($stmt->execute()) {
    echo "Account created successfully";
} else {
    echo "Error creating account: " . $stmt->error;
}

$stmt->close();
$conn->close();

}
?>