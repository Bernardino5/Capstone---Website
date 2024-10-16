<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Worker List</title>
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
    <h1>Constrction Worker List</h1>
    <button class="button" id="addRecordButton">Add Worker</button>
    <button class="button" onclick="window.location.href='index.php'">Go Back to Dashboard</button>
    
    <div class="form-container" id="workerFormContainer">
        <form id="workerForm" method="POST">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="date" id="dateCreated" name="dateCreated" required>
            <input type="text" id="workerName" name="workerName" placeholder="Worker Name" required>
            <input type="date" id="dateOfBirth" name="dateOfBirth" required>
            <input type="text" id="contact" name="contact" placeholder="Contact No." required>
            <input type="text" id="gender" name="gender" placeholder="Gender" required>
            <input type="text" id="helmetNo" name="helmetNo" placeholder="Helmet No." required>
            <input type="text" id="location" name="location" placeholder="Location" required>
            <button type="submit" class="button">Register Worker</button>
            <button type="button" class="button" id="cancelButton">Cancel</button>
        </form>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date Created</th>
                <th>Worker Name</th>
                <th>Date of Birth</th>
                <th>Contact No.</th>
                <th>Gender</th>
                <th>Helmet No.</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="workerTableBody">
        <?php
$servername = "localhost"; // or your server
$username = "root"; // your DB username
$password = ""; // your DB password
$dbname = "worker_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $dateCreated = $_POST['dateCreated'];
    $workerName = $_POST['workerName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $helmetNo = $_POST['helmetNo'];
    $location = $_POST['location'];

    $sql = "INSERT INTO worker_list (email, date_created, worker_name, date_of_birth, contact_no, gender, helmet_no, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $email, $dateCreated, $workerName, $dateOfBirth, $contact, $gender, $helmetNo, $location);

    if ($stmt->execute()) {
        echo "<script>alert('New worker added successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}

// Retrieve and display workers
$sql = "SELECT worker_id, email, date_created, worker_name, date_of_birth, contact_no, gender, helmet_no, location FROM worker_list";
$result = $conn->query($sql);

// Check if the query was successful before accessing the result
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['email']}</td>
                <td>{$row['date_created']}</td>
                <td>{$row['worker_name']}</td>
                <td>{$row['date_of_birth']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['helmet_no']}</td>
                <td>{$row['location']}</td>
                <td><button onclick=\"removeWorker({$row['worker_id']})\">Remove</button></td>
            </tr>";
    }
} else {
    // If the query failed or there are no workers
    if ($result === false) {
        echo "<tr><td colspan='9'>Error: " . $conn->error . "</td></tr>";
    } else {
        echo "<tr><td colspan='9'>No workers found.</td></tr>";
    }
}

$conn->close();
?>


        </tbody>
    </table>

    <script>
        const formContainer = document.getElementById('workerFormContainer');
        const form = document.getElementById('workerForm');
        const tableBody = document.getElementById('workerTableBody');
        const addRecordButton = document.getElementById('addRecordButton');
        const cancelButton = document.getElementById('cancelButton');

        addRecordButton.addEventListener('click', function() {
            formContainer.classList.toggle('show');
        });

        cancelButton.addEventListener('click', function() {
            formContainer.classList.remove('show');
            form.reset();
        });

        function removeWorker(worker_id) {
    if (confirm("Are you sure you want to remove this worker?")) {
        window.location.href = `delete.php?worker_id=${worker_id}`;
    }
}

    </script>
</body>
</html>
