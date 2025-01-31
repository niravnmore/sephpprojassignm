<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 49</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 49</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Sorting Arrays: Write a script that demonstrates the use of sort(), rsort(), asort(), and ksort()
                functions to sort arrays.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Sorting Arrays</h3>
        </div>

        <div class="container text-white bg-dark">

            <!-- <div class="col-10 p-5"> -->
            <?php
                        // Sample array
                        $numbers = [5, 2, 9, 1, 7, 11, 12, 3, 6, 8, 4, 10];
                        $associativeArray = [
                            "banana" => 3,
                            "apple" => 5,
                            "orange" => 2,
                            "grapes" => 4
                        ];

                        echo "<div class='row justify-content-center'>";
                        echo "<div class='col-4'>";
                        echo "<h6>Original Numeric Array:</h6>";
                        echo "<pre>";
                        print_r($numbers);
                        echo "</pre>";
                        echo "</div>";


                        // sort() - Sorts an array in ascending order
                        sort($numbers);
                        echo "<div class='col-4'>";
                        echo "<h6>Sorted with sort():</h6>";
                        echo "<p>(Ascending Order)</p>";
                        echo "<pre>";
                        print_r($numbers);
                        echo "</pre>";
                        echo "</div>";

                        // rsort() - Sorts an array in descending order
                        rsort($numbers);
                        echo "<div class='col-4'>";
                        echo "<h6>Sorted with rsort():</h6>";
                        echo "<p>(Descending Order)</p>";
                        echo "<pre>";
                        print_r($numbers);
                        echo "</pre>";
                        echo "</div>";
                        echo "</div>";

                        echo "<hr>";


                        echo "<div class='row justify-content-center'>";
                        echo "<div class='col-4'>";
                        echo "<h6>Original Associative Array:</h6>";
                        echo "<pre>";
                        print_r($associativeArray);
                        echo "</pre>";
                        echo "</div>";

                        // asort() - Sorts an associative array by values (ascending)
                        asort($associativeArray);
                        echo "<div class='col-4'>";
                        echo "<h6>Sorted with asort():</h6>";
                        echo "<p>(Values in Ascending Order)</p>";
                        echo "<pre>";
                        print_r($associativeArray);
                        echo "</pre>";
                        echo "</div>";
                        

                        // ksort() - Sorts an associative array by keys (ascending)
                        ksort($associativeArray);
                        echo "<div class='col-4'>";
                        echo "<h6>Sorted with ksort():</h6>";
                        echo "<p>(Keys in Ascending Order)</p>";
                        echo "<pre>";
                        print_r($associativeArray);
                        echo "</pre>";
                        echo "</div>";
                        echo "</div>";
                    
                    ?>
        </div>
    </div>
    <hr>
    </div>

    </div>
</body>

</html>