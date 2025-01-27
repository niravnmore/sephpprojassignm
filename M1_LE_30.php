<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 30</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 30</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Variable Variables: Demonstrate the use of variable variables in PHP. Write a script
            where a variable name is stored in another variable, and then use it to print the value.</p>
        </div>

        <!-- Type Casting: Write a script that declares variables of different types and converts
                them into other types (e.g., integer to float, string to integer). Display the type and
                value before and after the conversion.  -->

        <div class="row bg-dark text-white text-center h-5">
            <h3>Variable variables</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="col-6 text-center">

            <?php
            $name = "John";
            $$name = "Doe";
            echo "The value of \$name is : " . $name . "<br>";
            echo "The value of \$\$name is : " . $John . "<br>";
            echo "The value of \$John is : $John" . "<br>";
            ?>
        
            </div>
        </div>
</body>

</html>