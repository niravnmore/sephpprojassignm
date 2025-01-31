<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 46</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 46</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>FizzBuzz Program: Write a program using a for loop that prints numbers from 1 to 100. But for multiples
                of 3, print "Fizz" instead of the number, for multiples of 5 print "Buzz", and for multiples of both 3
                and 5 print "FizzBuzz".</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>FizzBuzz Program</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="text">Enter your Name to see magic</label>
                        <input type="text" id="text" name="text" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_POST['text'])) {
                        
                        for ($i = 1; $i <= 100; $i++) {
                            if ($i % 3 == 0 && $i % 5 == 0) {
                                echo "FizzBuzz<br>";
                            } elseif ($i % 3 == 0) {
                                echo "Fizz<br>";
                            } elseif ($i % 5 == 0) {
                                echo "Buzz<br>";
                            } else {
                                echo $i . "<br>";
                            }
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