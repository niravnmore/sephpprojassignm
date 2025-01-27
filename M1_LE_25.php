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
        <div class="row bg-dark text-white h-5">

            <div class="col-4 p-5">
                <h3 class="mb-3">String Concatenation</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="sttA" class="form-label">Enter a String</label>
                        <input type="text" class="form-control" id="sttA" name="sttA" required>
                    </div>
                    <div class="mb-3">
                        <label for="sttB" class="form-label">Enter another String</label>
                        <input type="text" class="form-control" id="sttB" name="sttB" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="operation" value="concate">Concatenate</button>
                </form>
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sttA']) && isset($_POST['sttB']) && isset($_POST['operation'])) {
                    $sttA = $_POST['sttA'];
                    $sttB = $_POST['sttB'];
                    $operation = $_POST['operation'];
                    echo "<div class='mt-5'>";
                    echo "<p> Entered string A is : $sttA </p>";
                    echo "<p> Entered string B is : $sttB </p>";

                    $conca = $sttA . $sttB;

                    echo "<p> Concatenated string is : $conca </p>";
                    echo "</div>";
                }

                ?>
            </div>

            <div class="col-4 p-5">
                <h3 class="mb-3">Sub-string Extraction</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="sttC" class="form-label">Enter a String</label>
                        <input type="text" class="form-control" id="sttC" name="sttC" required>
                    </div>
                    <div class="mb-3">
                        <label for="offset" class="form-label">Enter offset value</label>
                        <input type="number" class="form-control" id="offset" name="offset" required>
                    </div>
                    <div class="mb-3">
                        <label for="sublen" class="form-label">Enter substring length</label>
                        <input type="number" class="form-control" id="sublen" name="sublen" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="operation" value="substr">Extract
                        Substring</button>
                </form>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sttC']) && isset($_POST['offset']) && isset($_POST['sublen']) && isset($_POST['operation'])) {
                    $sttC = $_POST['sttC'];
                    $offset = $_POST['offset'];
                    $sublen = $_POST['sublen'];
                    $operation = $_POST['operation'];
                    echo "<div class='mt-5'>";
                    echo "<p> Entered string C is : $sttC </p>";
                    echo "<p> Entered offset value is : $offset </p>";
                    echo "<p> Entered substring length is : $sublen </p>";

                    $substr = substr($sttC, $offset, $sublen);

                    echo "<p> Substring is : $substr </p>";
                    echo "</div>";
                }

                ?>
            </div>

            <div class="col-4 p-5">
                <h3 class="mb-3">Check string length</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="sttD" class="form-label">Enter a String</label>
                        <input type="text" class="form-control" id="sttD" name="sttD">
                    </div>
                    <button type="submit" class="btn btn-primary" name="operation" value="strlen">Get length of
                        String</button>
                </form>
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sttD']) && isset($_POST['operation'])) {
                    $sttD = $_POST['sttD'];
                    $operation = $_POST['operation'];
                    echo "<div class='mt-5'>";
                    echo "<p> Entered string D is : $sttD </p>";

                    $lenD = strlen($sttD);

                    echo "<p> Length of string D is : $lenD </p>";
                    echo "</div>";
                }

                ?>
            </div>
        </div>

    </div>

</body>

</html>