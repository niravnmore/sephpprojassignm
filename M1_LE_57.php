<?php
// Set a custom error handler to catch the error when the file doesn't exist
set_error_handler(function ($errno, $errstr) {
    // Check if the error is related to file inclusion
    if ($errno === E_WARNING) {
        // Display a custom error message
        echo "<p style='color: red; font-weight: bold;'>Error: The required file is missing or could not be included. Please contact the administrator.</p>";
        // echo "$errno \n";
        // echo $errstr;
        exit(); // Stop further execution
    }
    // Default PHP error handler for other errors
    return false;
});

// Use require to include a critical file
require 'M1_LE_54a.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 57</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 57</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>File Not Found Handling: Use require to include a critical file. If the file doesn't exist, display a
                custom error message instead of the default PHP error.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>File Not Found Handling</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <p>Check the source code for the custom error handler.</p>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>