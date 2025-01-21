<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 17</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 17</h1>

    <p>Create an associative array for user details (name, email, age) and display them.</p>

    <h3>Associative Array</h3>

    <table>
        <form action="" method="post">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $user = array(
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'email' => $_POST['email'],
                    'age' => $_POST['age']
                );
                echo "<tr><td>First Name: " . $user['fname'] . "</td></tr>";
                echo "<tr><td>Last Name: " . $user['lname'] . "</td></tr>";
                echo "<tr><td>Email: " . $user['email'] . "</td></tr>";
                echo "<tr><td>Age: " . $user['age'] . "</td></tr>";
            }
            ?>
        </form>
    </table>

</body>

</html>