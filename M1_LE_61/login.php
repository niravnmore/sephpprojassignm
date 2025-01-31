<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <!-- header -->
    <div class="header">
        <h1>Welcome to Login Page</h1>
    </div>

    <!-- navigation bar -->
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>

    <!-- main content -->
    <div class="container">
        <div class="row">
            <div class="column side">
                <h2>Side</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="column middle">
                <div class="main-content">
                    <form action="" method="post">
                        <table class="table">
                            <tr>
                                <td><label for="username">Username</label></td>
                                <td><input type="text" id="fname" name="firstname" placeholder="username.." required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td><input type="email" id="email" name="email" placeholder="email.." required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="_pass">Password</label></td>
                                <td><input type="password" id="_pass" name="_pass" placeholder="password.." required>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="output">

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fname = $_POST['firstname'];
                        $lname = $_POST['lastname'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $country = $_POST['country'];

                        echo "<h2>Your Input:</h2>";
                        echo "First Name: " . $fname . "<br>";
                        echo "Last Name: " . $lname . "<br>";
                        echo "Email: " . $email . "<br>";
                        echo "Message: " . $message . "<br>";
                        echo "Country: " . $country;
                    }

                    ?>
                </div>
            </div>
            <div class="column side">
                <h2>Side</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <h2>This is a footer</h2>
        <p>Footer text</p>
    </div>

</body>

</html>