<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(89, 89, 167);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgb(102, 102, 177);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }

        .form-container h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            font-size: x-large;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: rgb(89, 89, 167);
            cursor: pointer;
            margin-bottom: 10px;
        }

        .form-button:hover {
            background-color: rgb(70, 70, 130);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Sign Up</h1>
            <form action="#" method="post">
                <input class="form-input" type="text" name="fullname" placeholder="Full Name" required>
                <input class="form-input" type="email" name="email" placeholder="Email" required>
                <input class="form-input" type="password" name="password" placeholder="Password" required>
                <button class="form-button" type="submit">Sign Up</button>
                <button class="form-button"><a href="./login.php">Login</a></button>
            </form>
        </div>
    </div>
</body>

</html>
