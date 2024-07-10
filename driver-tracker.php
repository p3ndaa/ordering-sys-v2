<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Operations</title>
    <style>
        /* General Styles */
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #121212;
    color: #e0e0e0;
}

a {
    text-decoration: none;
    color: #e0e0e0;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Header Styles */
.header-wrapper {
    background-color: #1f1f1f;
    border-bottom: 1px solid #333;
}

.header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.header-logo {
    font-size: 24px;
    font-weight: bold;
    color: #e0e0e0;
}

.header-top ul {
    display: flex;
    gap: 20px;
}

.header-top ul li {
    display: inline;
}

.header-top ul li a {
    font-size: 16px;
    color: #e0e0e0;
    padding: 5px 10px;
    transition: color 0.3s;
}

.header-top ul li a:hover {
    color: #bb86fc;
}

/* Footer Styles */
.footer {
    text-align: center;
    padding: 20px;
    background-color: #1f1f1f;
    border-top: 1px solid #333;
    margin-top: 20px;
}

.footer p {
    font-size: 14px;
    color: #777;
}

/* Container Styles */
.operations-wrapper {
    width: 80%;
    margin: auto;
    padding: 20px;
    margin-top: 16px;
    background-color: #1e1e1e;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

h1 {
    color: #a020f0;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #444;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #a020f0;
}

tr:nth-child(even) {
    background-color: #2e2e2e;
}

/* Form Container Styles */
.form-container {
    margin-top: 20px;
    text-align: center;
}

.form-container input, .form-container select {
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #444;
    background-color: #1e1e1e;
    color: #fff;
}

.form-container button {
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    background-color: #a020f0;
    color: #fff;
    cursor: pointer;
}


</style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-top">
            <div class="header-logo">Ohm Cooperations | Hello, Driver.</div>
            <ul>
                <li><a href="driver-tracker.php">Delivery</a></li>
                <li><a href="driver-profile.html">Profile</a></li>
                <li><a href="index.html">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="operations-wrapper">
        <div class="operations-header">
            <h1>Driver Operations</h1>
        </div>
        <div class="operations-content">
            <table>
                <tr>
                    <th>Parcel ID</th>
                    <th>Delivery Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <!-- PHP code to fetch and display parcel data here -->
                <?php
                // Example PHP code to fetch data
                // Replace with actual database connection and query
                /*
                $conn = new mysqli("localhost", "username", "password", "database");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT id, delivery_date, status FROM parcels";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['delivery_date']}</td>
                                <td>{$row['status']}</td>
                                <td>
                                    <button onclick='editParcel({$row['id']})'>Edit</button>
                                    <button onclick='deleteParcel({$row['id']})'>Delete</button>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No parcels found</td></tr>";
                }
                $conn->close();
                */
                ?>
            </table>

            <div class="form-container">
                <h2>Add / Edit Parcel</h2>
                <form action="driver_operations.php" method="POST">
                    <input type="hidden" name="parcel_id" id="parcel_id" value="">
                    <input type="date" name="delivery_date" id="delivery_date" required>
                    <select name="status" id="status" required>
                        <option value="delivering">Delivering</option>
                        <option value="arrived">Arrived</option>
                        <option value="claimed">Claimed</option>
                    </select>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editParcel(id) {
            // JavaScript function to populate form with parcel data for editing
            // Fetch parcel data and fill the form
            // For example:
            // document.getElementById('parcel_id').value = id;
            // document.getElementById('delivery_date').value = fetchedDate;
            // document.getElementById('status').value = fetchedStatus;
        }

        function deleteParcel(id) {
            // JavaScript function to delete parcel
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this parcel?")) {
            //     window.location.href = `delete_parcel.php?id=${id}`;
            // }
        }
    </script>
</body>
</html>
