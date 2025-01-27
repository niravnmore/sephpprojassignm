<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 32</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 32</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>$_GET and $_POST: Create two separate forms: one that uses the $_GET method
                and one that uses $_POST. Display the difference in the URL and how data is passed.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>$_GET and $_POST</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <h2>GET Form</h2>
                    <form method="GET" action="">
                        <label for="name_get">Name:</label>
                        <input type="text" id="name_get" name="name_get" required>
                        <button type="submit">Submit (GET)</button>
                    </form>
                </div>
                <div class="col-6 text-center">
                    <h2>POST Form</h2>
                    <form method="POST" action="">
                        <label for="name_post">Name:</label>
                        <input type="text" id="name_post" name="name_post" required>
                        <button type="submit">Submit (POST)</button>
                    </form>
                </div>
            </div>
            <hr>
        </div>
        <div class="container text-center text-white bg-dark col-4">
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <?php if (!empty($_GET)): ?>
                    <h2>GET Data Received</h2>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($_GET['name_get'] ?? ''); ?></p>
                    <p><strong>Query String in URL:</strong> <?php echo htmlspecialchars($_SERVER['QUERY_STRING']); ?>
                    </p>
                    <?php endif; ?>

                    <?php if (!empty($_POST)): ?>
                    <h2>POST Data Received</h2>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name_post'] ?? ''); ?></p>
                    <p><strong>POST data is not visible in the URL.</strong></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>