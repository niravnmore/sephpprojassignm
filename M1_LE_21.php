<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center">
            <h1>Module 1 Lab Exercise 21</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Calculator: Create a calculator using user-defined functions.</p>
        </div>

        <!-- Calculator: Create a calculator using user-defined functions. -->
        <div class="row bg-dark text-white text-center h-5">
            <h3>Calculator</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <form action="" method="post">
                <label for="num1">First Number</label>
                <input name="num1" type="number" class="form-control mb-3" placeholder="first number" required>
                <label for="num2">Second Number</label>
                <input name="num2" type="number" class="form-control mb-3" placeholder="second number" required>
                <select class="form-control mb-3" name="operation" id="op">
                    <option value="">Select Operation</option>
                    <option value="add">Addition</option>
                    <option value="sub">Substraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                    <option value="mod">Modulus</option>
                </select>
                <button type="submit">Calculate</button>
            </form>
        </div>
        <div class="container text-center text-white bg-dark col-4 pt-5">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                echo "<p> First number is : $num1 </p>";
                $num2 = $_POST['num2'];
                echo "<p> Second number is : $num2 </p>";
                $operation = $_POST['operation'];
                // echo "<p> $operation </p>";

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        break;
                    case 'sub':
                        $result = $num1 - $num2;
                        break;
                    case 'mul':
                        $result = $num1 * $num2;
                        break;
                    case 'div':
                        if ($num2 == 0) {
                            $result = "Error: Division by zero!";
                        } else {
                            $result = $num1 / $num2;
                        }
                        break;
                    case 'mod':
                        if ($num2 == 0) {
                            $result = "Error: Division by zero!";
                        } else {
                            $result = $num1 % $num2;
                        }
                        break;
                    default:
                        $result = 'Invalid Operation.';
                }

                echo "<h2>Result: $result</h2>";

            }

            ?>
        </div>


    </div>

</body>

</html>