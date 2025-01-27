<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 28</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Output Statements: Experiment with echo, print, and var_dump. Write a script that
                outputs different types of data using these functions.</p>
        </div>

        <!--  -->


        <div class="row bg-dark text-white text-center h-5">
            <h3>Output statements</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <div class="col-6 text-center">
                <h2>echo</h2>
                <?php
                echo "Hello, World!";
                ?>
            </div>

            <div class="col-6 text-center">
                <h2>print</h2>
                <?php
                print "Hello, World!";
                ?>
            </div>

            <div class="col-6 text-center">
                <h2>var_dump</h2>

                <?php

                $data = array("name" => "Nirav", "email" => "nirav@gmail.com", "username" => "nirav.123");
                var_dump($data);

                ?>

            </div>

            <div class="col-6 text-center">
                <h2>print_r</h2>

                <?php

                // $data = array("name" => "Nirav", "email" => "nirav@gmail.com", "username" => "nirav.123");
                print_r($data);

                ?>

            </div>
        </div>

        <div class="row bg-dark text-white h-5">



        </div>

</body>

</html>