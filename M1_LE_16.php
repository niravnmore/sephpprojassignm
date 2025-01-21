<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 16</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 16</h1>

    <p>Find and display the number of odd and even elements in an array.</p>

    <h3>Indexed Array</h3>

    <p>
        Length of the array is: <?php

        $myArray = ["25", "30", "35", "40", "45", "50", "55", "60", "65", "70"];
        echo count($myArray); ?></p>

    <p>Values of the array are: <?php print_r($myArray); ?></p>

    <?php 
    for($i = 0; $i < count($myArray); $i++) {
        if($myArray[$i] % 2 == 0) {
            $even[] = $myArray[$i];
        } else {
            $odd[] = $myArray[$i];
        }
    }
    ?>

    <p>Number of even numbers are: <?php echo count($even); ?></p>
    <p>Number of odd numbers are: <?php echo count($odd); ?></p>

</body>

</html>