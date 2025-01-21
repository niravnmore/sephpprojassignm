<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 19</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 19</h1>

    <p>Write a script to display the current date and time in different formats.</p>

    <!-- Write a script to display the current date and time in different formats. -->

    <h3>Date - Time</h3>

    <?php

    $today = date("D, d m Y");

    $myArray = [0, 1, 0, 2, 0, 3, 0, 4, 0, 5];

    ?>

    <p>
        <?php

        echo date("D, d m Y");

        ?>

    </p>

    <p>
        <?php

        echo date("D, d-M-Y");

        ?>

    </p>

    <p>
        <?php

        echo date("D, d-M-Y, H:i:s");

        ?>

    </p>

    <p>
        <?php

        echo date("l, d-M-Y, H:i:s, A");

        ?>

    </p>

    <p>
        <?php

        echo date(DATE_ATOM);

        ?>

    </p>

    <p>
        <?php

        echo date(DATE_COOKIE);

        ?>

    </p>

</body>

</html>