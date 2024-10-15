<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headgear Application</title>
    <style>
        body {
            background-color: #062A78; /* Background color */
            margin: 0; /* Remove default margin */
            height: 100vh; /* Full viewport height */
            display: flex; /* Flexbox layout */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            text-align: center; /* Center text */
        }
        .container-fluid {
            max-width: 600px; /* Maximum width for the container */
            width: 100%; /* Full width */
            padding: 20px; /* Padding inside the container */
            color: white; /* Text color */
        }
        .btn {
            background: linear-gradient(45deg, #062A78, white); /* Gradient background */
            color: white; /* Text color for the button */
            border: none; /* Remove border */
            padding: 10px 20px; /* Button padding */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Make the text bold */
        }
        .btn:hover {
            background: linear-gradient(45deg, #0B3D9C, #E0E0E0); /* Darker gradient on hover */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <img src="logo.png" alt="Headgear Logo" class="img-fluid mb-4" style="max-width: 200px;"> <!-- Centered Logo -->
        <h1>Welcome to Protect Headgear Website</h1>
        <a href="login.php" class="btn mt-3">Login</a> <!-- Login Button -->
    </div>
</body>
</html>
