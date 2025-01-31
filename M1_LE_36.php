<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 36</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 36</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Prepared Statements : Implement SQL queries using prepared statements with placeholders to prevent SQL
                injection in SELECT, INSERT, UPDATE, and DELETE.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Prepared Statements</h3>
        </div>

        <div class="container text-start text-white bg-dark">
            <div class="row mt-3">
                <h4>Select Query</h4>
                <div class="col-10 text-start">
                    <pre><code class="language-php">
$conn = new mysqli("localhost", "username", "password", "database");

$stmt = $conn->prepare("SELECT id, name, email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

$email = "user@example.com"; // Example user input
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
}

$stmt->close();
$conn->close();

                    </code></pre>
                </div>
                <h4>Insert Query</h4>
                <div class="col-10 text-start">
                    <pre><code class="language-php">
$conn = new mysqli("localhost", "username", "password", "database");

$stmt = $conn->prepare("INSERT INTO users (name, email, age) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $name, $email, $age);

$name = "John Doe";
$email = "john@example.com";
$age = 25;

$stmt->execute();

echo "New record inserted successfully";

$stmt->close();
$conn->close();
</code></pre>
                </div>
                <h4>Update Query</h4>
                <div class="col-10 text-start">
                    <pre><code class="language-php">
$conn = new mysqli("localhost", "username", "password", "database");

$stmt = $conn->prepare("UPDATE users SET name = ?, age = ? WHERE email = ?");
$stmt->bind_param("sis", $name, $age, $email);

$name = "Jane Doe";
$age = 30;
$email = "john@example.com";

$stmt->execute();

echo "Record updated successfully";

$stmt->close();
$conn->close();
                </code></pre>
                </div>
                <h4>Delete Query</h4>
                <div class="col-10 text-start">
                    <pre><code class="language-php">
$conn = new mysqli("localhost", "username", "password", "database");

$stmt = $conn->prepare("DELETE FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

$email = "john@example.com";

$stmt->execute();

echo "Record deleted successfully";

$stmt->close();
$conn->close();
                </code></pre>
                </div>
            </div>
        </div>
    </div>
</body>

</html>