<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Management</title>
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

<h2>Current Workers List</h2>
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
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "worker_management";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Handle deletion of workers
        if (isset($_GET['email'])) {
            $email = $_GET['email'];

            // Get worker details
            $sql = "SELECT * FROM worker_list WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $worker = $result->fetch_assoc();

                // Insert into deleted_workers
                $sqlDelete = "INSERT INTO deleted_workers (email, date_created, worker_name, helmet_no) VALUES (?, ?, ?, ?)";
                $stmtDelete = $conn->prepare($sqlDelete);
                $stmtDelete->bind_param("ssss", $worker['email'], $worker['date_created'], $worker['worker_name'], $worker['helmet_no']);
                $stmtDelete->execute();

                // Mark the worker as deleted
                $sqlUpdate = "UPDATE worker_list SET deleted = 1, deleted_at = NOW() WHERE email = ?";
                $stmtUpdate = $conn->prepare($sqlUpdate);
                $stmtUpdate->bind_param("s", $email);
                $stmtUpdate->execute();

                echo "<script>alert('Worker deleted successfully.');</script>";
            } else {
                echo "<script>alert('Worker not found.');</script>";
            }

            $stmt->close();
        }

        // Retrieve and display current workers
        $sql = "SELECT * FROM worker_list WHERE deleted = 0"; // Adjusted query to show only non-deleted workers
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
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
                        <td><button onclick=\"confirmDeletion('{$row['email']}')\">Delete</button></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No workers found.</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

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
    <tbody id="deletedWorkerTableBody">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "worker_management";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Check if worker_id is passed
        if (isset($_GET['worker_id'])) {
            $workerId = $_GET['worker_id'];
            
            // Prepare and execute delete query
            $sql = "DELETE FROM worker_list WHERE worker_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $workerId);
        
            if ($stmt->execute()) {
                echo "<script>alert('Worker deleted successfully.'); window.location.href = 'worker.php';</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
        
            $stmt->close();
        }
        
        $conn->close();
        ?>
    </tbody>
</table>

<script>
    function confirmDeletion(email) {
        if (confirm("Are you sure you want to delete this worker?")) {
            window.location.href = `?email=${encodeURIComponent(email)}`; // Redirect to delete worker
        }
    }

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
