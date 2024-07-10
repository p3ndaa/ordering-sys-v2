
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Delivery Status</title>
    <style>
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
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px); /* Adjust height to account for header and footer */
        }
        .form-container {
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #2c2c2c;
            color: #e0e0e0;
        }
        button {
            padding: 10px 20px;
            background-color: #3882f6;
            border: none;
            border-radius: 4px;
            color: #f9faf8;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #2c6cd6;
        }
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
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-top">
        <div class="header-logo">Ohm Cooperations | Hello, Customer.</div>
            <ul>
                <li><a href="customer-tracker.php">Delivery</a></li>
                <li><a href="customer-cart.php">Cart</a></li>
                <li><a href="customer-profile.html">Profile</a></li>
                <li><a href="index.html">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="form-container">
            <h2>Check Delivery Status</h2>
            <form action="" method="POST">
                <label for="tracking_id">Enter your Tracking ID:</label>
                <input type="text" id="tracking_id" name="tracking_id" required>
                <button type="submit">Check Status</button>
            </form>
            <div id="statusResult">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tracking_id'])) {
                    $trackingId = htmlspecialchars($_POST['tracking_id']);
                    $deliveryStatus = checkDeliveryStatus($trackingId);
                    echo "Delivery Status for $trackingId: $deliveryStatus";
                }

                function checkDeliveryStatus($trackingId) {
                    // Simulated delivery status based on tracking ID
                    // Replace this with actual logic to get the delivery status
                    $statuses = ['In Transit', 'Delivered', 'Pending', 'Out for Delivery'];
                    return $statuses[array_rand($statuses)];
                }
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Ohm Ordering System. All rights reserved.</p>
    </div>
</body>
</html>