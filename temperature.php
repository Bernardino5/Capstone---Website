<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Report</title>
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
        .action-button {
            padding: 5px 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .action-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Temperature Report</h2>
        <button class="button" onclick="window.location.href='index.php'">Go Back to Dashboard</button>
        <table>
            <thead>
                <tr>
                    <th>Worker Name</th>
                    <th>Helmet No.</th>
                    <th>Temperature</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vladimir Leyson</td>
                    <td>HD321</td>
                    <td>36°</td>
                    <td>
                        <button class="action-button" onclick="editEntry('01')">Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>John Baniqued</td>
                    <td>HD128</td>
                    <td>36°</td>
                    <td>
                        <button class="action-button" onclick="editEntry('02')">Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>Darwin Rosales</td>
                    <td>HD289</td>
                    <td>36°</td>
                    <td>
                        <button class="action-button" onclick="editEntry('03')">Edit</button>
                    </td>
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>

    <script>
        function viewDetails(helmetNo) {
            alert('Viewing details for Helmet No. ' + helmetNo);
            // Implement further logic for viewing details here
        }

        function editEntry(helmetNo) {
            alert('Editing entry for Helmet No. ' + helmetNo);
            // Implement further logic for editing the entry here
        }

        function deleteEntry(helmetNo) {
            alert('Deleting entry for Helmet No. ' + helmetNo);
            // Implement further logic for deleting the entry here
        }
    </script>
</body>
</html>
