<?php
// Database connection
$host = "localhost";
$user = "root"; // Change if necessary
$pass = ""; // Change if necessary
$dbname = "mybatchdb"; // Change to your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from table
$usertablesql = "SELECT id, name, email FROM users";
$usertabledata = $conn->query($usertablesql);

$ordertablesql = "SELECT id, user_id, product, amount FROM orders";
$ordertabledata = $conn->query($ordertablesql);

$innerjoinsql = "SELECT * FROM users JOIN orders ON users.id = orders.user_id";
$innerjoindata = $conn->query($innerjoinsql);

$leftjoinsql = "SELECT * FROM users LEFT OUTER JOIN orders ON users.id = orders.user_id";
$leftjoindata = $conn->query($leftjoinsql);

$rightjoinsql = "SELECT * FROM users RIGHT OUTER JOIN orders ON users.id = orders.user_id";
$rightjoindata = $conn->query($rightjoinsql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 35</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 35</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Complex Joins :
                Create a PHP script that connects two or more tables using
                INNER JOIN, LEFT JOIN, and RIGHT JOIN.
                Display data from these tables based on specific conditions.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>SQL Joins</h3>
        </div>

        <div class="container text-start text-white bg-dark">
            <div class="row mt-3">
                <div class="col-6">
                    <h2>Users List</h2>
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        <?php
                        if ($usertabledata->num_rows > 0) {
                            while ($row = $usertabledata->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No data found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-6">
                    <h2>Order List</h2>
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User_id</th>
                            <th>Product</th>
                            <th>Amount</th>
                        </tr>
                        <?php
                        if ($ordertabledata->num_rows > 0) {
                            while ($row = $ordertabledata->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['user_id']}</td>
                                        <td>{$row['product']}</td>
                                        <td>{$row['amount']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No data found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <h3>Inner Join</h3>
                <div class="col-10 text-start">
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>Users.ID</th>
                            <th>Users.Name</th>
                            <th>Users.email</th>
                            <th>Orders.ID</th>
                            <th>Orders.User_id</th>
                            <th>Orders.Product</th>
                            <th>Orders.Amount</th>
                        </tr>
                        <?php
                        if ($innerjoindata->num_rows > 0) {
                            while ($row = $innerjoindata->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['id']}</td>
                                        <td>{$row['user_id']}</td>
                                        <td>{$row['product']}</td>
                                        <td>{$row['amount']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No data found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <h3>Left Join</h3>
                <div class="col-10 text-start">
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>Users.ID</th>
                            <th>Users.Name</th>
                            <th>Users.email</th>
                            <th>Orders.ID</th>
                            <th>Orders.User_id</th>
                            <th>Orders.Product</th>
                            <th>Orders.Amount</th>
                        </tr>
                        <?php
                        if ($leftjoindata->num_rows > 0) {
                            while ($row = $leftjoindata->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['id']}</td>
                                        <td>{$row['user_id']}</td>
                                        <td>{$row['product']}</td>
                                        <td>{$row['amount']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No data found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <h3>Right Join</h3>
                <div class="col-10 text-start">
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>Users.ID</th>
                            <th>Users.Name</th>
                            <th>Users.email</th>
                            <th>Orders.ID</th>
                            <th>Orders.User_id</th>
                            <th>Orders.Product</th>
                            <th>Orders.Amount</th>
                        </tr>
                        <?php
                        if ($rightjoindata->num_rows > 0) {
                            while ($row = $rightjoindata->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['id']}</td>
                                        <td>{$row['user_id']}</td>
                                        <td>{$row['product']}</td>
                                        <td>{$row['amount']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No data found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>