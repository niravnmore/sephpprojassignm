<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 58</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 58</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Enhanced Factorial: Write a recursive and non-recursive function to calculate the factorial of a number. Compare their performance for large numbers.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Enhanced Factorial</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="num">Enter a number</label>
                        <input type="number" id="num" name="num" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    function factorial($n)
                    {
                        if ($n == 0) {
                            return 1;
                        } else {
                            return $n * factorial($n - 1);
                        }
                    }

                    if (isset($_POST['num'])) {
                        $num = $_POST['num'];
                        $start = microtime(true);
                        $result = factorial($num);
                        $end = microtime(true);
                        $time = $end - $start;
                        echo "Factorial of $num is $result (Recursive) calculated in $time seconds.<br>";

                        $start = microtime(true);
                        $result = 1;
                        for ($i = 1; $i <= $num; $i++) {
                            $result *= $i;
                        }
                        $end = microtime(true);
                        $time = $end - $start;
                        echo "Factorial of $num is $result (Non-Recursive) calculated in $time seconds.<br>";
                    }
                    ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>