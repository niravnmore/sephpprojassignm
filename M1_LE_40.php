<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 40</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 40</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Grading System: Write a PHP program that accepts a student’s marks and outputs their grade using if-else
                conditions (A, B, C, D, Fail based on score).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Grading System</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="num">Enter your Marks</label>
                        <input type="number" id="num" name="num" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                if(isset($_POST['num'])){
                    $number = $_POST['num'];
                    if ($number >= 90) {
                        $grade = "A";
                    } elseif ($number >= 80) {
                        $grade = "B";
                    } elseif ($number >= 70) {
                        $grade = "C";
                    } elseif ($number >= 60) {
                        $grade = "D";
                    } else {
                        $grade = "Fail";
                    }
                    
                    // Output the result
                    echo "<p>Student's Marks: $number</p>";
                    echo "<p>Grade: $grade</p>";
                }
                ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>