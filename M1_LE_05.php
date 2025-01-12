<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 05</title>
</head>
<body>

<h1>Lab Exercise 5</h1>

<form action="" method="post">
    <div>
        <label for="number">Enter a Number :</label>
        <input type="text" name="number" id="number" pattern="[0-9]+">
    </div>
    <input type="submit" value="Submit!">
</form>

<?php
if ($_POST) {
    $data = $_POST;
    if ($data['number']) {
        $number = $data['number'];
        echo "You entered $number.<br>";
        if ($number % 2 == 0) {
            echo "The number $number is even number.<br>";
        } else {
            echo "The number $number is odd number.<br>";
        }
    }
}
?>
    
</body>
</html>