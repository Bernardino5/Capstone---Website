<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Workers List</title>
    <style>
        body {
            background-color: #062A78; /* Background color */
            color: white; /* Text color for better contrast */
            font-family: Arial, sans-serif; /* Font style */
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align items to the start (left) */
            padding: 20px; /* Add padding around the body */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; /* Add space above the table */
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2; /* Header background color */
            color: black; /* Header text color for contrast */
        }
        button {
            padding: 5px 10px;
            background-color: #3A5B98; /* Mixed color of #062A78 and white */
            border: none;
            color: white; /* Text color for the button */
            cursor: pointer;
            border-radius: 4px; /* Rounded corners */
            margin: 10px 0; /* Space above and below the button */
        }
        button:hover {
            background-color: #2E4B7B; /* Darker shade on hover */
        }
    </style>
</head>
<body>

<!-- Go Back to Dashboard Button -->
<button onclick="goBack()">Go Back to Dashboard</button>

<h2>Deleted Workers List</h2>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Date Created</th>
            <th>Worker Name</th>
            <th>Helmet No.</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="workerTableBody">
        <!-- Rows will be populated here -->
    </tbody>
</table>

<script>
    const deletedWorkers = [
        { email: "john.doe@gmail.com", dateCreated: "2023-01-15", workerName: "John Doe", helmetNo: "HD123", action: "Restore" },
        { email: "jane.smith@gmail.com", dateCreated: "2023-02-22", workerName: "Jane Smith", helmetNo: "HD124", action: "Restore" },
        { email: "mike.johnson@gmail.com", dateCreated: "2023-03-10", workerName: "Mike Johnson", helmetNo: "HD125", action: "Restore" },
        { email: "lucy.brown@gmail.com", dateCreated: "2023-04-05", workerName: "Lucy Brown", helmetNo: "HD126", action: "Restore" },
        { email: "robert.white@gmail.com", dateCreated: "2023-05-30", workerName: "Robert White", helmetNo: "HD127", action: "Restore" }
    ];

    const tableBody = document.getElementById('workerTableBody');

    deletedWorkers.forEach(worker => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${worker.email}</td>
            <td>${worker.dateCreated}</td>
            <td>${worker.workerName}</td>
            <td>${worker.helmetNo}</td>
            <td><button onclick="performAction('${worker.email}')">${worker.action}</button></td>
        `;
        tableBody.appendChild(row);
    });

    function performAction(email) {
        alert(`Action performed for ${email}`);
        // Here you can add functionality for restoring the worker or any other action
    }

    function goBack() {
        window.location.href = "index.php"; // Redirect to index.php
    }
</script>

</body>
</html>
