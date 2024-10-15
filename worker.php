<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker List</title>
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
    <h1>Worker List</h1>
    <button class="button" id="addRecordButton">Add Record</button>
    <button class="button" onclick="window.location.href='index.php'">Go Back to Dashboard</button>
    
    <div class="form-container" id="workerFormContainer">
        <form id="workerForm">
            <input type="email" id="email" placeholder="Email" required>
            <input type="date" id="dateCreated" required>
            <input type="text" id="workerName" placeholder="Worker Name" required>
            <input type="date" id="dateOfBirth" required>
            <input type="text" id="contact" placeholder="Contact No." required>
            <input type="text" id="gender" placeholder="Gender" required>
            <input type="text" id="helmetNo" placeholder="Helmet No." required>
            <input type="text" id="location" placeholder="Location" required>
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
            <tr>
                <td>leysonvladimir@gmail.com</td>
                <td>2024-10-01</td>
                <td>Vladimir Leyson</td>
                <td>1990-01-15</td>
                <td>09889672320</td>
                <td>Male</td>
                <td>HD123</td>
                <td>Site A</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            </tr>
            <tr>
                <td>baniquedjonash@gmail.com</td>
                <td>2024-10-02</td>
                <td>Jonash Baniqued</td>
                <td>1985-15-01</td>
                <td>09763465870</td>
                <td>Male</td>
                <td>HS456</td>
                <td>Site D</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            </tr>
            <tr>
                <td>sorianoken@gmail.com</td>
                <td>2024-10-03</td>
                <td>Ken Soriano</td>
                <td>1988-05-02</td>
                <td>09658967290</td>
                <td>Male</td>
                <td>MJ789</td>
                <td>Site D</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            </tr>
            <tr>
                <td>rosalesdarwin@gmail.com</td>
                <td>2024-10-04</td>
                <td>Darwin Rosales</td>
                <td>1976-23-10</td>
                <td>09679082890</td>
                <td>Male</td>
                <td>LB101</td>
                <td>Site B</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            </tr>
            <tr>
                <td>delpilarjosh@gmail.com</td>
                <td>2024-10-05</td>
                <td>Josh Del pilar</td>
                <td>1956-29-08</td>
                <td>0966468380/td>
                <td>Male</td>
                <td>MT202</td>
                <td>Site B</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            </tr>
            <!-- Additional rows can go here -->
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

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form submission

            const email = document.getElementById('email').value;
            const dateCreated = document.getElementById('dateCreated').value;
            const workerName = document.getElementById('workerName').value;
            const dateOfBirth = document.getElementById('dateOfBirth').value;
            const contact = document.getElementById('contact').value;
            const gender = document.getElementById('gender').value;
            const helmetNo = document.getElementById('helmetNo').value;
            const location = document.getElementById('location').value;

            // Create a new row
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${email}</td>
                <td>${dateCreated}</td>
                <td>${workerName}</td>
                <td>${dateOfBirth}</td>
                <td>${contact}</td>
                <td>${gender}</td>
                <td>${helmetNo}</td>
                <td>${location}</td>
                <td><button onclick="removeWorker(this)">Remove</button></td>
            `;

            // Add the new row to the table body
            tableBody.appendChild(row);

            // Clear the form fields and hide the form
            form.reset();
            formContainer.classList.remove('show');
        });

        function removeWorker(button) {
            const row = button.parentElement.parentElement;
            tableBody.removeChild(row);
        }
    </script>
</body>
</html>
