<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 54</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 54</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Page Redirect Based on Condition: Write a script that checks if a user is logged in (use a boolean
                variable). If not, use the header() function to redirect them to a login page.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Page Redirect Based on Condition</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <?php
                    $isLoggedIn = true;
                    if (!$isLoggedIn) {
                        header("Location: M1_LE_61/login.php");
                        exit();
                    }
                    echo "You are logged in!";
                    ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>