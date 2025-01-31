<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 60</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 60</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>File Upload: Create a form that allows users to upload a file. Upon submission, download the file using a button click and display the file’s details (name, type, size).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>File Upload</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <form action="" method="post" enctype="multipart/form-data" class="p-5">
                        <label for="file">Select a file to upload</label>
                        <input type="file" id="file" name="file" required>
                        <input type="submit" value="Upload">
                    </form>

                    <?php
                    if (isset($_FILES['file'])) {
                        $file = $_FILES['file'];
                        $fileName = $file['name'];
                        $fileType = $file['type'];
                        $fileSize = $file['size'];

                        echo "<p>File Name: $fileName</p>";
                        echo "<p>File Type: $fileType</p>";
                        echo "<p>File Size: $fileSize bytes</p>";
                    }
                    ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>