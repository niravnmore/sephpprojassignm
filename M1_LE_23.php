<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 23</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center">
            <h1>Module 1 Lab Exercise 23</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>String Reverse: Reverse a string without using built-in functions.</p>
        </div>

        <!-- Write a function that finds the factorial of a number using recursion. -->
        <div class="row bg-dark text-white text-center h-5">
            <h3>String Reverse</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <form action="" method="post">
                <label for="stt">Enter a string</label>
                <input name="stt" type="text" class="form-control mb-3" placeholder="enter a string" required>

                <button type="submit">Process</button>
            </form>
        </div>
        <div class="container text-center text-white bg-dark col-4 pt-5">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $stt = $_POST['stt'];
                echo "<p> Entered string is : $stt </p>";

                $len = strlen($stt);

                $rever = "";
                for($i = $len - 1; $i >= 0; $i--){
                    $rever .= $stt[$i];
                }
                // $reversed = reversStr($stt);
                echo "<p> Reversed string is : $rever </p>";
            }

            ?>
        </div>
    </div>

</body>

</html>