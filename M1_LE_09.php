<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 9</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 9</h1>

    <form action="" method="post">
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age"><br>
        <input type="submit" value="Submit">
    </form>
    
<?php
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
        
        echo ($age < 18) ? "You are a minor." : "You are an adult.";
    }
?>

</body>

</html>