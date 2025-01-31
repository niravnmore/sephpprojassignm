<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 47</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 47</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Multiplication Table: Write a PHP script using a nested for loop to generate a multiplication table from
                1 to 10.</p>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-10 text-center">
                    <form action="" method="post" class="p-5">
                        <label for="text">Enter your Name</label>
                        <input type="text" id="text" name="text" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                if(isset($_POST['text'])){
                    echo "<div class='row bg-dark text-white text-center justify-content-center h-5'>";
                    echo "<h3>Multiplication Table</h3>";
                    
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<div class='col-3 text-center p-5'>";
                        echo "<p> Multiplication Table of $i </p>";
                        for ($j = 1; $j <= 10; $j++) {
                            echo "<p> $i x $j = " . $i * $j . "</p>";
                        }
                        echo "</div>";
                    }
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>