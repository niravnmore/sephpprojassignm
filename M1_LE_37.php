<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 37</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 37</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Transaction Management : Write a PHP script that uses SQL transactions to insert data into multiple
                tables, ensuring data integrity in case of an error.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Transaction Management</h3>
        </div>

        <div class="container text-start text-white bg-dark">
            <div class="row mt-3">

                <div class="col-10 text-start">
                    <pre><code class="language-php">
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Begin transaction
    $conn->begin_transaction();

    // Insert into users table
    $stmt1 = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt1->bind_param("ss", $name, $email);

    $name = "John Doe";
    $email = "john@example.com";
    $stmt1->execute();
    
    // Get the last inserted user ID
    $user_id = $conn->insert_id;

    // Insert into orders table
    $stmt2 = $conn->prepare("INSERT INTO orders (user_id, product, amount) VALUES (?, ?, ?)");
    $stmt2->bind_param("isi", $user_id, $product, $amount);

    $product = "Laptop";
    $amount = 1500;
    $stmt2->execute();

    // Commit transaction if both queries succeed
    $conn->commit();

    echo "Transaction successful: User and order inserted.";

} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    echo "Transaction failed: " . $e->getMessage();
}

// Close connections
$stmt1->close();
$stmt2->close();
$conn->close();
                    </code></pre>
                </div>
            </div>
        </div>
    </div>
</body>

</html>