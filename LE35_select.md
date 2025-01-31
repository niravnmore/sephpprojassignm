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
