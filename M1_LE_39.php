<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 39</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 39</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Switch Case with Multiple Cases: Write a script that accepts a grade (A, B, C, D, F) and displays a
                message using a switch statement. Handle multiple cases that fall under the same logic (e.g., A and B
                show "Excellent").</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Switch Case with Multiple Cases</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="grad">Please enter A, B, C, D, or F</label>
                        <input type="text" id="grad" name="grad" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_POST['grad'])) {
                        $grade = $_POST['grad'];
                        // $grade = 'B';

                        // Convert to uppercase to handle lowercase input
                        $grade = strtoupper($grade);

                        switch ($grade) {
                            case 'A':
                            case 'B':
                                echo "<p>Excellent! Keep up the great work.</p>";
                                break;
                            case 'C':
                                echo "<p>Good job! You can do even better.</p>";
                                break;
                            case 'D':
                                echo "<p>You passed, but there's room for improvement.</p>";
                                break;
                            case 'F':
                                echo "<p>Failed. Don't give up, try harder next time!</p>";
                                break;
                            default:
                                echo "<p>Invalid grade entered. Please enter A, B, C, D, or F.</p>";
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