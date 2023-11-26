<?php
require 'connection.php';

// Assuming you have the ID of the announcement you want to update
$UserIdToUpdate = $_GET['id']; // Replace with the actual ID

// Fetch the existing data for the announcement to populate the form
$sql = "SELECT * FROM contact WHERE id = $UserIdToUpdate";
$result = $conn->query($sql);

// Initialize variables to avoid undefined variable warnings
$existingFirstName = $existingLastName = $existingEmail = $existingPassword = $existingrole = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Check if the keys exist in the $row array before accessing them
    $existingFirstName = isset($row['firstname']) ? $row['firstname'] : '';
    $existingLastName = isset($row['lastname']) ? $row['lastname'] : '';
    $existingEmail = isset($row['email']) ? $row['email'] : '';
    $existingpassword = isset($row['password']) ? $row['password'] : '';
    $existingconfirm_password = isset($row['confirm_password']) ? $row['confirm_password'] : '';
    $existingrole = isset($row['role']) ? $row['role'] : '';


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Update Announcement</title>

    <!-- Add any additional styling if needed -->

</head>
<body class="flex justify-center items-center h-screen bg-gray-200">
<div class="bg-white p-8 rounded-md shadow-md max-w-xl w-full">
<div class="container mt-5">
<h2 class="text-2xl font-bold text-center mb-4">Update Announcement</h2>

<form class="space-y-4 md:space-y-6" action="signupbackend.php" method="post">
                  <div>
                      <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingFirstName; ?></label>
                      <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                  </div>
                  <div>
                      <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingLastName; ?></label>
                      <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingEmail; ?></label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingpassword; ?></label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingconfirm_password; ?> </label>
                      <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>     
                  <div class="mb-4">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo $existingrole;?> </label>
                    <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder = "Select a role">
                        <option value="User">User</option>
                        <option value="Annoucer">Annoucer</option>
                    </select>
                  </div>

                  <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Create an account</button>

                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Already have an account? <a href="login.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                  </p>
              </form>
</div>

</body>
</html>
