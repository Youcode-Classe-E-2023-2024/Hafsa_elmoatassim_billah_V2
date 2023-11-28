<?php
session_start();

include 'connection.php';


// check if user logged
if (!isset($_SESSION["id"])) {
  header("Location: login.php");
  exit();
}

// logout
if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Annonce</title>

  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-button {
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: rgb(89, 89, 167);
      cursor: pointer;
      margin-bottom: 10px;
      margin: 10px;
    }

    .form-button a {
      color: #ffffff;
      text-decoration: none;
    }

    .loginbtn {
      display: flex;
      justify-content: end;
      width: 100%;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      padding: 1em;
    }

    label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: rgb(89, 89, 167);
      width: 100%;
    }
  </style>

</head>

<body>
<nav style="background-color: #5959A7;">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="./img/avito_logo.png" alt="">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="readSp.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Users Liste</a>
            <a href="home.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Annonce Liste</a>
            <a href="annonce.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><u>Add an annonce</u></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</nav>
  <form method="post">
    <div class="loginbtn" class="logout">
      <button  class="form-button"><a href="home.php">See the Annouces</a></button>
      <button name="logout" for="logout" class="form-button">Logout</button>
    </div>
  </form>

  <div class="container mt-5">
    <h2>Create an Announcement</h2>

    <form method="post">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" required>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" name="description" required></textarea>
      </div>

      <div class="mb-3">
        <label for="lastname" class="form-label">Price</label>
        <input type="text" class="form-control" placeholder="$$" name="price" required>
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="Electronique">Electronique</option>
          <option value="Logement">Logement</option>
          <option value="Voiture">Voiture</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>
<?php
