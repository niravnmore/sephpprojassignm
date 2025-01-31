<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 59</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 59</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Palindrome Checker: Create a function that checks if a given string is a palindrome.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Palindrome Checker</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="text">Enter a string</label>
                        <input type="text" id="text" name="text" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    function isPalindrome($str)
                    {
                        $str = strtolower($str);
                        $str = preg_replace('/[^a-z0-9]/', '', $str);
                        $rev = strrev($str);
                        if ($str == $rev) {
                            return true;
                        } else {
                            return false;
                        }
                    }

                    if (isset($_POST['text'])) {
                        $text = $_POST['text'];
                        if (isPalindrome($text)) {
                            echo "$text";
                            echo "<p>This is a palindrome.</p>";
                        } else {
                            echo "$text";
                            echo "<p>This is not a palindrome.</p>";
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