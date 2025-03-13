<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,rgb(255, 255, 255), #005a9e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .home-container {
            text-align: center;
            background: #ffffff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        h1 {
            margin-bottom: 20px;
            color: #333333;
            font-size: 2rem;
        }
        p {
            margin-bottom: 30px;
            color: #555555;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-login {
            background-color: #6C63FF;
        }
        .btn-login:hover {
            background-color: #4A4AEF;
        }
        .btn-register {
            background-color: #000000;
        }
        .btn-register:hover {
            background-color: #2e2d2c;
        }
    </style>
</head>
<body>
    <div class="home-container">
        <h1>Welcome to Our Website</h1>
        <p>Access your account or create a new one to get started.</p>
        <a href="login.html" class="btn btn-login">Login</a>
        <a href="register.html" class="btn btn-register">Register</a>
    </div>
</body>
</html>
