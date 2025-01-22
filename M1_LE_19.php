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
        echo "Format 'D, d m Y' : " . date("D, d m Y");
        ?>
    </p>

    <p>
        <?php
        echo "Format 'D, d-M-Y' : " . date("D, d-M-Y");
        ?>
    </p>

    <p>
        <?php
        echo "Format 'D, d-M-Y, H:i:s' : " . date("D, d-M-Y, H:i:s");
        ?>
    </p>

    <p>
        <?php
        echo "Format 'l, d-M-Y, H:i:s, A' : " . date("l, d-M-Y, H:i:s, A");
        ?>
    </p>

    <p>
        <?php
        echo "Format DATE_ATOM : " . date(DATE_ATOM);
        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_COOKIE : " . date(DATE_COOKIE);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_ISO8601 : " . date(DATE_ISO8601);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_RFC822 : " . date(DATE_RFC822);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_RFC850 : " . date(DATE_RFC850);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_RFC1036 : " . date(DATE_RFC1036);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_RFC1123 : " . date(DATE_RFC1123);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_RFC2822 : " . date(DATE_RFC2822);

        ?>

    </p>

    <p>
        <?php

        echo "Format DATE_W3C : " . date(DATE_W3C);

        ?>

    </p>

</body>

</html>