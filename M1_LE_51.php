<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 51</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 51</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Array Merge and Diff: Write a PHP script that merges two arrays and finds the difference between them
                using array_merge() and array_diff().</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Multi-dimensional Array</h3>
        </div>

        <div class="container text-center text-white bg-dark">


            <?php

                    $array1 = array("a" => "red", "b" => "green", "c" => "blue");
                    $array2 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

                    echo "<div class='row'>";
                    echo "<div class='col-6 text-start p-3'</div>";
                    echo "<h3>Array 1</h3>";
                    echo "<pre>";
                    print_r($array1);
                    echo "</pre>";
                    echo "</div>";

                    echo "<div class='col-6 text-start p-3'</div>";
                    echo "<h3>Array 2</h3>";
                    echo "<pre>";
                    print_r($array2);
                    echo "</pre>";
                    echo "</div>";
                    echo "</div>";


                    echo "<div class='row'>";
                    echo "<div class='col-6 text-start p-3'</div>";
                    echo "<h3>Merged Array</h3>";
                    echo "<pre>";
                    print_r(array_merge($array1, $array2));
                    echo "</pre>";
                    echo "</div>";

                    echo "<div class='col-6 text-start p-3'</div>";
                    echo "<h3>Array Difference</h3>";
                    echo "<pre>";
                    print_r(array_diff($array2, $array1));
                    echo "</pre>";
                    echo "</div>";
                    echo "</div>";

                    
                    ?>

        </div>
    </div>
    </div>
</body>

</html>