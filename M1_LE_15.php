<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 15</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 15</h1>

    <p>Display the value of an array.</p>

    <h3>Indexed Array</h3>

    <p>
        Length of the array is: <?php

        $colors = ["red", "green", "blue", "yellow", "purple"];
        echo count($colors); ?></p>

    <p>Values of the array are: <?php print_r($colors); ?></p>

    <?php 

    foreach($colors as $color) {
        echo "<p>$color</p>";
    }
    
    ?>

</body>

</html>