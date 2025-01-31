<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 52</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 52</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Time Difference: Write a script that calculates the time difference between two dates (e.g., "today" and
                "next birthday").</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Time Difference</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="date1">Enter the first date</label>
                        <input type="date" id="date1" name="date1" required>
                        <label for="date2">Enter the second date</label>
                        <input type="date" id="date2" name="date2" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_POST['date1']) && isset($_POST['date2'])) {
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];

                        $diff = abs(strtotime($date2) - strtotime($date1));

                        $years = floor($diff / (365 * 60 * 60 * 24));
                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                        echo "<p>First Date: $date1</p>";
                        echo "<p>Second Date: $date2</p>";
                        echo "<p>Time Difference: $years years, $months months, $days days</p>";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>