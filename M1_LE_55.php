<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 55</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 55</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Content-Type Header: Write a script that sets the Content-Type header to return a plain text file or a
                JSON response.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Content-Type Header</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="opt">Select an output</label>
                        <select name="opt" id="opt" required>
                            <option value="text">Text</option>
                            <option value="json">JSON</option>
                        </select>
                        <input type="submit" value="Submit">

                    </form>
                    <?php
                    if (isset($_POST['opt'])) {
                        $opt = $_POST['opt'];
                        if ($opt == 'text') {
                            header('Content-Type: text/plain');
                            echo "This is a text response.";
                        } elseif ($opt == 'json') {
                            header('Content-Type: application/json');
                            $data = [
                                'status' => 'success',
                                'message' => 'This is a JSON response.'
                            ];
                            // Encode the array into a JSON format and output it
                            echo json_encode($data);
                        } else {
                            echo "Invalid option.";
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