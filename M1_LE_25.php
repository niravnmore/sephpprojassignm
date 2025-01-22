<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 25</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center">
            <h1>Module 1 Lab Exercise 25</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Write a script to perform various string operations like concatenation, substring
                extraction, and string length determination.</p>
        </div>

        <!-- Write a script to perform various string operations like concatenation, substring
            extraction, and string length determination. -->
        <div class="row bg-dark text-white text-center h-5">
            <h3>String Reverse</h3>
        </div>

        <div class="container text-center text-white bg-dark col-4">
            <form action="" method="post">
                <select class="form-control mb-3" name="operation" id="op">
                    <option value="">Select Operation</option>
                    <option value="concate">Concatenation</option>
                    <option value="substr">Substring Extraction</option>
                    <option value="strlen">String Length</option>
                </select>
                <button type="submit">Process</button>
            </form>
        </div>
        <div class="container text-center text-white bg-dark col-4 pt-5">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sttA']) && isset($_POST['sttB']) && isset($_POST['operation'])) {
                $sttA = $_POST['sttA'];
                $sttB = $_POST['sttB'];
                $operation = $_POST['operation']; 
                echo "<p> Entered string A is : $sttA </p>";
                echo "<p> Entered string B is : $sttB </p>";
                echo "<p> Operation is : $operation </p>";

                $lenA = strlen($sttA);
                $lenB = strlen($sttB);

                $conca = $sttA . $sttB;

                $substr = substr($sttA, 0, 3);

                if ($operation == "concate") {
                    echo "<p> Concatenated string is : $conca </p>";
                } elseif ($operation == "substr") {
                    echo "<p> Substring is : $substr </p>";
                } elseif ($operation == "strlen") {
                    echo "<p> Length of string A is : $lenA </p>";
                    echo "<p> Length of string B is : $lenB </p>";
                }
            }

            ?>
        </div>
    </div>

</body>

</html>