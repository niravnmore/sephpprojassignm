<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 48</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 48</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Reverse Number Sequence: Write a script using a do-while loop that displays numbers from 10 to 1.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Reverse Number Sequence</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <?php
                    $i = 10;
                    do {
                        echo $i . "<br>";
                        $i--;
                    } while ($i >= 1);
                    ?>
                </div>

            </div>
            <hr>
        </div>

    </div>
</body>

</html>