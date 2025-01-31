<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 41</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 41</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Temperature Converter: Write a script that takes temperature in Celsius or Fahrenheit as input and
                converts it to the other format using if conditions.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Temperature Converter</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="tem">Enter tempreture</label>
                        <input type="number" id="tem" name="tem" required>
                        <select name="unit" id="unit">
                            <option value="">Select a unit</option>
                            <option value="C">Celcius</option>
                            <option value="F">Fahrenheit</option>
                        </select>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                if(isset($_POST['num'])){
                    $number = $_POST['num'];
                    if ($number > 0) {
                        echo "<p>$number is a Positive number. </p>";
                    
                        // Check if it's even or odd
                        if ($number % 2 == 0) {
                            echo "<p>It is an Even number.</p>";
                        } else {
                            echo "<p>It is an Odd number.</p>";
                        }
                    } elseif ($number < 0) {
                        echo "<p>$number is a Negative number. </p>";
                    
                        // Check if it's even or odd
                        if ($number % 2 == 0) {
                            echo "<p>It is an Even number.</p>";
                        } else {
                            echo "<p>It is an Odd number.</p>";
                        }
                    } else {
                        echo "<p>The number is Zero, which is neither positive nor negative.</p>";
                    }
                }
                ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>