<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 31</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 31</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Global and Local Scope: Write a script that shows how global and local variables
                work. Use the global keyword inside a function to access a global variable.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Global and Local Scope</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <div class="col-6 text-center">
            <?php
            // Global variable
            $counter = 10;

            function incrementCounter()
            {
                // Declare global variable to access the global scope
                global $counter;

                // Increment the global variable
                $counter++;

                // Local variable (only accessible within this function)
                $localCounter = 5;
                echo "Inside function: Counter (global) = $counter, Local Counter = $localCounter <br>";
            }

            // Display the global variable before calling the function
            echo "Before function call: Counter (global) = $counter <br>";

            // Call the function
            incrementCounter();

            // Display the global variable after calling the function
            echo "After function call: Counter (global) = $counter <br>";

            // Attempting to access the local variable outside the function will result in an undefined variable error
            // echo $localCounter; // Uncommenting this line will result in an undefined variable error

            ?>

            </div>
        </div>
</body>

</html>