<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Parcel</title>
    <style>
        :root {
            --primary-color: #bb86fc;
            --background-color: #121212;
            --surface-color: #1f1f1f;
            --on-surface-color: #e0e0e0;
            --on-background-color: #b0b0b0;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--on-surface-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: var(--on-surface-color);
            transition: color 0.3s ease;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a:hover {
            color: var(--primary-color);
        }

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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        .table-container {
            background-color: var(--surface-color);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            max-width: 1000px;
            width: 100%;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 30px;
            color: var(--primary-color);
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #333;
            text-align: left;
        }

        table th {
            background-color: var(--primary-color);
            color: var(--background-color);
        }

        table tr:nth-child(even) {
            background-color: #2c2c2c;
        }

        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container input {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: var(--surface-color);
            color: var(--on-surface-color);
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: var(--surface-color);
            color: var(--on-background-color);
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-top">
            <div class="header-logo">Ohm Cooperations</div>
            <ul>
                <li><a href="customer-tracker.php">Delivery</a></li>
                <li><a href="customer-cart.php">Cart</a></li>
                <li><a href="customer-profile.html">Profile</a></li>
                <li><a href="index.html">Log Out</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1>Track Your Parcel</h1>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search">
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Parcel ID</th>
                        <th>Shipping Out Date</th>
                        <th>Parcel Status</th>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                    </tr>
                </thead>
                <tbody id="parcelTableBody">
                    <!-- PHP script will insert parcel data here -->
                    <?php
                    // Example PHP code to fetch and display data from the database
                    // Replace with your own database connection and query logic
                    $servername = "your_servername";
                    $username = "your_username";
                    $password = "your_password";
                    $dbname = "your_database";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT parcel_id, date_received, parcel_status, student_id, student_name FROM parcels";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["parcel_id"] . "</td>";
                            echo "<td>" . $row["date_received"] . "</td>";
                            echo "<td>" . $row["parcel_status"] . "</td>";
                            echo "<td>" . $row["student_id"] . "</td>";
                            echo "<td>" . $row["student_name"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No parcels found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Ohm Ordering System. All rights reserved.</p>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('#parcelTableBody tr');

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const matches = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(searchText));
                row.style.display = matches ? '' : 'none';
            });
        });
    </script>
</body>
</html>
