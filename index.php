<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        html, body {
            height: 100%; /* Make sure the body and html are full height */
            margin: 0; /* Remove any default margin */
            background: url('Backg.png') no-repeat center center fixed; /* Set background image */
            background-size: cover; /* Make background cover the entire viewport */
        }

        .dashboard-title {
            position: absolute; /* Position it in the top left */
            top: 20px; /* Distance from the top */
            left: 20px; /* Distance from the left */
            font-size: 24px; /* Make the text larger */
            color: white; /* Make the text white */
            font-family: Arial, sans-serif; /* Choose a font */
            font-weight: bold; /* Make the text bold */
        }

        .button-group {
            display: flex; /* Use flexbox for alignment */
            flex-direction: column; /* Stack buttons vertically */
            align-items: center; /* Center buttons horizontally */
            justify-content: center; /* Center the button group vertically and horizontally */
            width: 100%; /* Ensure the button group container spans the width */
            height: 100vh; /* Make the button group take full viewport height */
            margin: 0; /* Remove default margin */
        }

        .btn {
            display: block; /* Make button a block element */
            width: 100%; /* Optional: make buttons full width */
            max-width: 200px; /* Optional: set a max width for buttons */
            margin: 10px 0; /* Space between buttons */
            background: linear-gradient(45deg, #062A78, white); /* Gradient background */
            color: white; /* Text color */
            border: none; /* Remove border */
            padding: 10px; /* Button padding */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            text-align: center; /* Center text in button */
            font-weight: bold; /* Make the text bold */
        }
    </style>
</head>
<body>
    <!-- Dashboard title -->
    <div class="dashboard-title">Dashboard</div>

    <div class="button-group">
        <a href="worker.php" class="btn">Construction Worker's List</a>
        <a href="history.php" class="btn">History</a>
        <a href="delete.php" class="btn">Delete</a>
        <a href="archive.php" class="btn">Archive</a>
        <a href="report.php" class="btn">Helmet Report</a>
        <a href="temperature.php" class="btn">Temperature</a>
    </div>
</body>
</html>