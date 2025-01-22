<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">
        <?php 

        function factorialRecur($num){
            if ($num == 0){
                return 1;
            }
            return $num * factorialRecur($num - 1);
        }
        
        ?>

        <div class="row bg-dark text-white text-center">
            <h1>Module 1 Lab Exercise 22</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Factorial : Write a function that finds the factorial of a number using recursion.</p>
        </div>

        <!-- Write a function that finds the factorial of a number using recursion. -->
        <div class="row bg-dark text-white text-center h-5">
            <h3>Factorial</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <form action="" method="post">
                <label for="num1">Enter a Number</label>
                <input name="num1" type="number" class="form-control mb-3" placeholder="first number" required>
                
                <button type="submit">Calculate</button>
            </form>
        </div>
        <div class="container text-center text-white bg-dark col-4 pt-5">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                echo "<p> Entered number is : $num1 </p>";

                $result = factorialRecur($num1);

                echo "<h2>Factorial of $num1 is $result</h2>";
            }

            ?>
        </div>
    </div>

</body>

</html>