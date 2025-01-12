<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 03</title>
</head>

<body>
    <h1>User Form</h1>
    <div>
        <form action="" method="post">
            <div>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>
            <input type="submit" value="Submit!">
        </form>
    </div>
    <br><br>
    <?php
// print_r($_POST);
if ($_POST) {
    $data = $_POST;
    if ($data['name']) {
        $name = $data['name'];
        echo "Your name is $name.<br>";
    }
    if ($data['email']) {
        $email = $data['email'];
        echo "Your email address is $email.<br>";
    }
}
?>

</body>

</html>