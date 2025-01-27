<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 33</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 33</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>$_SERVER: Write a script to display various details of the server environment using the $_SERVER (like
                PHP_SELF, SERVER_NAME, HTTP_USER_AGENT, etc.).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>$_SERVER</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center">
                    <table class="table table-dark">
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>PHP_SELF</td>
                            <td><?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?></td>
                        </tr>
                        <tr>
                            <td>SERVER_NAME</td>
                            <td><?php echo htmlspecialchars($_SERVER['SERVER_NAME']); ?></td>
                        </tr>
                        <tr>
                            <td>SERVER_ADDR</td>
                            <td><?php echo htmlspecialchars($_SERVER['SERVER_ADDR']); ?></td>
                        </tr>
                        <tr>
                            <td>SERVER_SOFTWARE</td>
                            <td><?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE']); ?></td>
                        </tr>
                        <tr>
                            <td>REQUEST_METHOD</td>
                            <td><?php echo htmlspecialchars($_SERVER['REQUEST_METHOD']); ?></td>
                        </tr>
                        <tr>
                            <td>HTTP_USER_AGENT</td>
                            <td><?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?></td>
                        </tr>
                        <tr>
                            <td>REMOTE_ADDR</td>
                            <td><?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?></td>
                        </tr>
                        <tr>
                            <td>REMOTE_PORT</td>
                            <td><?php echo htmlspecialchars($_SERVER['REMOTE_PORT']); ?></td>
                        </tr>
                        <tr>
                            <td>SCRIPT_FILENAME</td>
                            <td><?php echo htmlspecialchars($_SERVER['SCRIPT_FILENAME']); ?></td>
                        </tr>
                        <tr>
                            <td>QUERY_STRING</td>
                            <td><?php echo htmlspecialchars($_SERVER['QUERY_STRING'] ?? ''); ?></td>
                        </tr>
                        <tr>
                            <td>DOCUMENT_ROOT</td>
                            <td><?php echo htmlspecialchars($_SERVER['DOCUMENT_ROOT']); ?></td>
                        </tr>
                        <tr>
                            <td>SERVER_PORT</td>
                            <td><?php echo htmlspecialchars($_SERVER['SERVER_PORT']); ?></td>
                        </tr>
                        <tr>
                            <td>REQUEST_URI</td>
                            <td><?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>