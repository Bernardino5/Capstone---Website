<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helmet Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #062A78; /* Set the background color */
            color: white; /* Change text color to white for better contrast */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: black; /* Keep header text color black for readability */
        }
        .form-container {
            display: none;
            margin-bottom: 20px;
        }
        .button {
            padding: 10px 15px;
            margin-bottom: 10px;
            cursor: pointer;
            background: linear-gradient(to right, #062A78, white); /* Gradient background */
            color: white; /* Set text color to white */
            border: 2px solid white; /* Add white border */
            border-radius: 4px; /* Add rounded corners */
            transition: background 0.3s; /* Smooth transition */
        }
        .button:hover {
            background: linear-gradient(to right, white, #062A78); /* Reverse gradient on hover */
        }
        .show {
            display: block;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Helmet Report</h2>
        <button class="button" onclick="window.location.href='index.php'">Go Back to Dashboard</button>
        <table>
            <thead>
                <tr>
                    <th>Worker Name</th>
                    <th>Helmet No.</th>
                    <th>Report</th>
                    <th>Date & Time</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vladimir Leyson</td>
                    <td>H-001</td>
                    <td>Checked - All Good</td>
                    <td>2024-10-16 & 08:30 AM</td>
                    <td><button>Modify</button></td>
                </tr>
                <tr>
                    <td>John Baniqued</td>
                    <td>H-002</td>
                    <td>Visor Damaged</td>
                    <td>2024-10-16 & 09:15 AM</td>
                    <td><button>Modify</button></td>
                </tr>
                <tr>
                    <td>Darwin Rosales</td>
                    <td>H-003</td>
                    <td>Chin Strap Loose</td>
                    <td>2024-10-16 & 10:00 AM</td>
                    <td><button>Modify</button></td>
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</body>
</html>
