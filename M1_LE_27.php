<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 27</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 27</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Embedding HTML and PHP: Create a web page that uses PHP to dynamically
                generate HTML content (e.g., a table with user information using PHP).</p>
        </div>

        <?php

        $users = array(
            array("name" => "Nirav", "email" => "nirav@gmail.com", "username" => "nirav.123"),
            array("name" => "Akshat", "email" => "akshat@gmail.com", "username" => "akshat.123"),
            array("name" => "Jill", "email" => "jill@gmail.com", "username" => "jill.123"),
            array("name" => "Rahul", "email" => "rahul@gmail.com", "username" => "rahul.123"),
            array("name" => "Ritesh", "email" => "ritesh@gmail.com", "username" => "ritesh.123"),
        )

            ?>

        <!--  -->

        <div class="row bg-dark text-white h-5">
            <div class="col-6 text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user["name"]; ?></td>
                                <td><?php echo $user["email"]; ?></td>
                                <td><?php echo $user["username"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>