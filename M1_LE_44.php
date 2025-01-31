<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 44</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 44</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Month Display: Create a program using switch case that takes a number (1-12) and displays the
                corresponding month.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Month Display</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="num">Enter a number from 1 to 12</label>
                        <input type="number" id="num" name="num" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_POST['num'])) {
                        $number = $_POST['num'];
                        switch ($number) {
                            case 1:
                                $month = "January";
                                break;
                            case 2:
                                $month = "February";
                                break;
                            case 3:
                                $month = "March";
                                break;
                            case 4:
                                $month = "April";
                                break;
                            case 5:
                                $month = "May";
                                break;
                            case 6:
                                $month = "June";
                                break;
                            case 7:
                                $month = "July";
                                break;
                            case 8:
                                $month = "August";
                                break;
                            case 9:
                                $month = "September";
                                break;
                            case 10:
                                $month = "October";
                                break;
                            case 11:
                                $month = "November";
                                break;
                            case 12:
                                $month = "December";
                                break;
                            default:
                                $month = "Invalid Month";
                        }

                        // Output the result
                        echo "<h4>Selected month is : $month </h4>";
                    }
                    ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>