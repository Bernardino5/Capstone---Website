<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
        <div class="header">
            <h1>History</h1>
            <button class="button" onclick="window.location.href='index.php'">Go Back to Dashboard</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Worker Name</th>
                    <th>Alert Type</th>
                    <th>Date & Time</th>
                    <th>LED Status</th>
                    <th>Buzzer Status</th>
                    <th>Location</th>
                    <th>Resolved Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vladimir Leyson</td>
                    <td>Breaktime call</td>
                    <td>2024-10-16 09:15 AM</td>
                    <td>True</td>
                    <td>True</td>
                    <td>Area A</td>
                    <td>Resolved</td>
                </tr>
                <tr>
                    <td>Jonash Baniqued</td>
                    <td>Urgent call</td>
                    <td>2024-10-16 10:00 AM</td>
                    <td>False</td>
                    <td>False</td>
                    <td>Area B</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>Ken Soriano</td>
                    <td>Breaktime call</td>
                    <td>2024-10-16 11:20 AM</td>
                    <td>True</td>
                    <td>True</td>
                    <td>Area C</td>
                    <td>Resolved</td>
                </tr>
                <tr>
                    <td>Darwin Rosales</td>
                    <td>Personal call</td>
                    <td>2024-10-16 12:30 PM</td>
                    <td>True</td>
                    <td>True</td>
                    <td>Area D</td>
                    <td>Resolved</td>
                </tr>
                <tr>
                    <td>Josh Del pilar</td>
                    <td>Personal call</td>
                    <td>2024-10-16 12:30 PM</td>
                    <td>True</td>
                    <td>True</td>
                    <td>Area D</td>
                    <td>Resolved</td>
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</body>
</html>
