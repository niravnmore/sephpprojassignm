<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 29</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Type Casting: Write a script that declares variables of different types and converts
                them into other types (e.g., integer to float, string to integer). Display the type and
                value before and after the conversion.</p>
        </div>

        <!-- Type Casting: Write a script that declares variables of different types and converts
                them into other types (e.g., integer to float, string to integer). Display the type and
                value before and after the conversion.  -->

        <div class="row bg-dark text-white text-center">
            <h3>Type Casting</h3>
        </div>

        <div class="container text-white bg-dark p-3"><hr>
            <?php
            function displayVariable($variable, $type)
            {
                echo "<h4>$type</h4>";
                echo "<p>Variable type : " . gettype($variable) . "<br>";
                echo "Variable value: " . var_export($variable, true) . "</p>";
            }

            $integer = 123;
            $float = 3.14;
            $string = "123";
            $string2 = "Hello, World!";
            $boolean = true;
            $array = [1, 2, 3];
            $null = null;

            ?>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($integer, "Original integer");
                    ?>
                </div>
                <div class="col-6 text-center">
                    <?php echo displayVariable((float) $integer, "Integer to float"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($float, "Original float");
                    ?>
                </div>
                <div class="col-6 text-center">
                    <?php echo displayVariable((int) $float, "Float to integer"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($string, "Original string");
                    ?>
                </div>
                <div class="col-6 text-center">
                    <?php echo displayVariable((int) $string, "String to integer"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($string2, "Original string");
                    ?>
                </div>
                <div class="col-6 text-center">
                <?php echo displayVariable((int) $string2, "String to integer"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($boolean, "Original boolean");
                    ?>
                </div>
                <div class="col-6 text-center">
                <?php echo displayVariable((string) $boolean, "Boolean to string"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($array, "Original array");
                    ?>
                </div>
                <div class="col-6 text-center">
                <?php echo displayVariable(@(string) $array, "Array to String"); ?>
                </div>
            </div><hr>
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php
                    echo displayVariable($null, "Original Null");
                    ?>
                </div>
                <div class="col-6 text-center">
                <?php echo displayVariable(@(string) $null, "Null to String"); ?>
                </div>
            </div>
        </div>
        <?php
        ?>

        <div class="col-6 text-center">


        </div>
</body>

</html>