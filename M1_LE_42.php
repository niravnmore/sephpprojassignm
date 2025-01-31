<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 42</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 42</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Enhanced Calculator: Modify the calculator to handle more complex operations such as exponentiation (^),
                modulus (%), and square root (√).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Enhanced Calculator</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <form action="" method="post" class="p-5">
                <div class="row text-center m-3">
                    <div class="col-6 text-start p-5">
                        <label for="num1">First Number</label>
                        <input name="num1" type="text" inputmode="decimal" class="form-control mb-3"
                            placeholder="first number" pattern="[0-9]*[.,]?[0-9]*" required>
                    </div>
                    <div class="col-6 text-start p-5">
                        <label for="num2">Second Number</label>
                        <input name="num2" type="text" inputmode="decimal" class="form-control mb-3"
                            placeholder="second number" pattern="[0-9]*[.,]?[0-9]*">

                    </div>

                    <select class="form-control mb-3" name="operation" id="op">
                        <option value="">Select Operation</option>
                        <option value="add">Addition</option>
                        <option value="sub">Substraction</option>
                        <option value="mul">Multiplication</option>
                        <option value="div">Division</option>
                        <option value="mod">Modulus</option>
                        <option value="exp">Exponentiation</option>
                        <option value="sqrt">Square Root</option>
                    </select>
                    <button type="submit">Calculate</button>
                </div>
            </form>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];

                $num2 = $_POST['num2'];

                $operation = $_POST['operation'];
                echo "<div class='row mt-3'>";
                echo "<div class='col-4 text-start'>";
                echo "<p> First number is : $num1 </p>";
                echo "</div>";
                echo "<div class='col-4 text-start'>";
                echo "<p> Second number is : $num2 </p>";
                echo "</div>";
                echo "<div class='col-4 text-start'>";
                echo "<p> Operation : $operation </p>";
                echo "</div>";

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'sub':
                        $result = $num1 - $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'mul':
                        $result = $num1 * $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'div':
                        $result = $num1 / $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'mod':
                        $result = $num1 % $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'exp':
                        $result = $num1 ** $num2;
                        echo "<p> Result : $result </p>";
                        break;
                    case 'sqrt':
                        $result = sqrt($num1);
                        echo "<p> Result : $result </p>";
                        break;
                    default:
                        $result = 'Invalid Operation.';
                }
                echo "</div>";
            }
            ?>
        </div>

    </div>

</body>

</html>