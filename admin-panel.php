<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/customer-profile-styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
</head>
<style>
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
.dashboard-wrapper {
    width: 80%;
    margin: auto;
    padding: 20px;
    background-color: #1e1e1e;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

h1, h2 {
    color: #a020f0;
    text-align: center;
}

section {
    margin-top: 30px;
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/customer-profile-styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-top">
            <div class="header-logo">Ohm Cooperations | Admin Dashboard</div>
            <ul>
                <li><a href="#orders">Orders</a></li>
                <li><a href="#shipping">Shipping</a></li>
                <li><a href="#customers">Customers</a></li>
                <li><a href="#drivers">Drivers</a></li>
                <li><a href="#tshirt-groups">T-Shirt Groups</a></li>
                <li><a href="index.html">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-header">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="dashboard-content">
            <!-- Orders Section -->
            <section id="orders">
                <h2>Orders</h2>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Design File</th>
                        <th>Actions</th>
                    </tr>
                    <!-- PHP code to fetch and display order data -->
                    <?php
                    // Example PHP code to fetch data
                    /*
                    $conn = new mysqli("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT order_id, customer_id, design_file FROM orders";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['order_id']}</td>
                                    <td>{$row['customer_id']}</td>
                                    <td>{$row['design_file']}</td>
                                    <td>
                                        <button onclick='editOrder({$row['order_id']})'>Edit</button>
                                        <button onclick='deleteOrder({$row['order_id']})'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No orders found</td></tr>";
                    }
                    $conn->close();
                    */
                    ?>
                </table>
            </section>

            <!-- Shipping Section -->
            <section id="shipping">
                <h2>Shipping</h2>
                <table>
                    <tr>
                        <th>Shipping ID</th>
                        <th>Order ID</th>
                        <th>Driver ID</th>
                        <th>Shipping Out Date</th>
                        <th>Delivery Status</th>
                        <th>Actions</th>
                    </tr>
                    <!-- PHP code to fetch and display shipping data -->
                    <?php
                    // Example PHP code to fetch data
                    /*
                    $conn = new mysqli("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT shipping_id, order_id, driver_id, shipping_out_date, delivery_status FROM shipping";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['shipping_id']}</td>
                                    <td>{$row['order_id']}</td>
                                    <td>{$row['driver_id']}</td>
                                    <td>{$row['shipping_out_date']}</td>
                                    <td>{$row['delivery_status']}</td>
                                    <td>
                                        <button onclick='editShipping({$row['shipping_id']})'>Edit</button>
                                        <button onclick='deleteShipping({$row['shipping_id']})'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No shipping records found</td></tr>";
                    }
                    $conn->close();
                    */
                    ?>
                </table>
            </section>

            <!-- Customers Section -->
            <section id="customers">
                <h2>Customers</h2>
                <table>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Actions</th>
                    </tr>
                    <!-- PHP code to fetch and display customer data -->
                    <?php
                    // Example PHP code to fetch data
                    /*
                    $conn = new mysqli("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT customer_id, customer_name, customer_email, customer_phone_no FROM customer";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['customer_id']}</td>
                                    <td>{$row['customer_name']}</td>
                                    <td>{$row['customer_email']}</td>
                                    <td>{$row['customer_phone_no']}</td>
                                    <td>
                                        <button onclick='editCustomer({$row['customer_id']})'>Edit</button>
                                        <button onclick='deleteCustomer({$row['customer_id']})'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No customers found</td></tr>";
                    }
                    $conn->close();
                    */
                    ?>
                </table>
            </section>

            <!-- Drivers Section -->
            <section id="drivers">
                <h2>Drivers</h2>
                <table>
                    <tr>
                        <th>Driver ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Plate No</th>
                        <th>Actions</th>
                    </tr>
                    <!-- PHP code to fetch and display driver data -->
                    <?php
                    // Example PHP code to fetch data
                    /*
                    $conn = new mysqli("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT driver_id, driver_name, driver_email, driver_phone_no, driver_plate_no FROM driver";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['driver_id']}</td>
                                    <td>{$row['driver_name']}</td>
                                    <td>{$row['driver_email']}</td>
                                    <td>{$row['driver_phone_no']}</td>
                                    <td>{$row['driver_plate_no']}</td>
                                    <td>
                                        <button onclick='editDriver({$row['driver_id']})'>Edit</button>
                                        <button onclick='deleteDriver({$row['driver_id']})'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No drivers found</td></tr>";
                    }
                    $conn->close();
                    */
                    ?>
                </table>
            </section>

            <!-- T-Shirt Groups Section -->
            <section id="tshirt-groups">
                <h2>T-Shirt Groups</h2>
                <table>
                    <tr>
                        <th>Group ID</th>
                        <th>Order Size</th>
                        <th>Order Sleeve</th>
                        <th>Order Collar</th>
                        <th>Order Quantity</th>
                        <th>Actions</th>
                    </tr>
                    <!-- PHP code to fetch and display T-Shirt group data -->
                    <?php
                    // Example PHP code to fetch data
                    /*
                    $conn = new mysqli("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT group_id, order_size, order_sleeve, order_collar, order_quantity FROM tshirt_group";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['group_id']}</td>
                                    <td>{$row['order_size']}</td>
                                    <td>{$row['order_sleeve']}</td>
                                    <td>{$row['order_collar']}</td>
                                    <td>{$row['order_quantity']}</td>
                                    <td>
                                        <button onclick='editTShirtGroup({$row['group_id']})'>Edit</button>
                                        <button onclick='deleteTShirtGroup({$row['group_id']})'>Delete</button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No T-Shirt groups found</td></tr>";
                    }
                    $conn->close();
                    */
                    ?>
                </table>
            </section>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Ohm Ordering System. All rights reserved.</p>
    </div>

    <script>
        function editOrder(id) {
            // JavaScript function to populate form with order data for editing
            // Fetch order data and fill the form
            // For example:
            // document.getElementById('order_id').value = id;
            // document.getElementById('customer_id').value = fetchedCustomerId;
            // document.getElementById('design_file').value = fetchedDesignFile;
        }

        function deleteOrder(id) {
            // JavaScript function to delete order
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this order?")) {
            //     window.location.href = `delete_order.php?id=${id}`;
            // }
        }

        function editShipping(id) {
            // JavaScript function to populate form with shipping data for editing
            // Fetch shipping data and fill the form
            // For example:
            // document.getElementById('shipping_id').value = id;
            // document.getElementById('order_id').value = fetchedOrderId;
            // document.getElementById('driver_id').value = fetchedDriverId;
            // document.getElementById('shipping_out_date').value = fetchedShippingOutDate;
            // document.getElementById('delivery_status').value = fetchedDeliveryStatus;
        }

        function deleteShipping(id) {
            // JavaScript function to delete shipping
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this shipping?")) {
            //     window.location.href = `delete_shipping.php?id=${id}`;
            // }
        }

        function editCustomer(id) {
            // JavaScript function to populate form with customer data for editing
            // Fetch customer data and fill the form
            // For example:
            // document.getElementById('customer_id').value = id;
            // document.getElementById('customer_name').value = fetchedCustomerName;
            // document.getElementById('customer_email').value = fetchedCustomerEmail;
            // document.getElementById('customer_phone_no').value = fetchedCustomerPhoneNo;
        }

        function deleteCustomer(id) {
            // JavaScript function to delete customer
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this customer?")) {
            //     window.location.href = `delete_customer.php?id=${id}`;
            // }
        }

        function editDriver(id) {
            // JavaScript function to populate form with driver data for editing
            // Fetch driver data and fill the form
            // For example:
            // document.getElementById('driver_id').value = id;
            // document.getElementById('driver_name').value = fetchedDriverName;
            // document.getElementById('driver_email').value = fetchedDriverEmail;
            // document.getElementById('driver_phone_no').value = fetchedDriverPhoneNo;
            // document.getElementById('driver_plate_no').value = fetchedDriverPlateNo;
        }

        function deleteDriver(id) {
            // JavaScript function to delete driver
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this driver?")) {
            //     window.location.href = `delete_driver.php?id=${id}`;
            // }
        }

        function editTShirtGroup(id) {
            // JavaScript function to populate form with T-Shirt group data for editing
            // Fetch T-Shirt group data and fill the form
            // For example:
            // document.getElementById('group_id').value = id;
            // document.getElementById('order_size').value = fetchedOrderSize;
            // document.getElementById('order_sleeve').value = fetchedOrderSleeve;
            // document.getElementById('order_collar').value = fetchedOrderCollar;
            // document.getElementById('order_quantity').value = fetchedOrderQuantity;
        }

        function deleteTShirtGroup(id) {
            // JavaScript function to delete T-Shirt group
            // Send delete request to server
            // For example:
            // if(confirm("Are you sure you want to delete this T-Shirt group?")) {
            //     window.location.href = `delete_tshirt_group.php?id=${id}`;
            // }
        }
    </script>
</body>
</html>
