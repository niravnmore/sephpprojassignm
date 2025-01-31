<?php
// Initialize variables
$fname = $lname = $email = $message = "";
$errors = [];

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Name
    if (empty($_POST["fname"])) {
        $errors[] = "First name is required.";
    } else {
        $fname = htmlspecialchars(strip_tags(trim($_POST["fname"])));
    }

    if (empty($_POST["lname"])) {
        $errors[] = "Last name is required.";
    } else {
        $lname = htmlspecialchars(strip_tags(trim($_POST["lname"])));
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    }

    // Validate Message
    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = htmlspecialchars(strip_tags(trim($_POST["message"])));
    }

    // Display errors if any, else show success message
    if (!empty($errors)) {
        echo "<p class='error'><strong>Error:</strong></p>";
        echo "<ul class='error'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='form.html'>Go Back</a>";
    } else {
        echo "<p class='success'><strong>Success!</strong> Your form has been submitted.</p>";
        echo "<p><strong>Name:</strong> $fname</p>";
        echo "<p><strong>Name:</strong> $lname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    }
}
?>
