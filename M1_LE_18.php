<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 18</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 18</h1>

    <p>Write a script to shift all zero values to the bottom of an array.</p>

    <!-- Write a script to shift all zero values to the bottom of an array. -->

    <h3>Indexed Array</h3>


    <?php

    $myArray = [0, 1, 0, 2, 0, 3, 0, 4, 0, 5];

    ?>

    <p>Values of the array are: <?php print_r($myArray); ?></p>

    <p>
        <?php

        $nonZero = array_filter($myArray, function ($value) {
            return $value != 0;
        });

        $zero = array_filter($myArray, function ($value) {
            return $value == 0;
        });

        $result = array_merge($nonZero, $zero);

        print_r($result);

        ?>

    </p>


</body>

</html>