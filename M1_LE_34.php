<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 34</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 34</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>$_FILES: Create a form that allows users to upload a file. Handle the uploaded file
                using the $_FILES super global and display information about the file.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>$_FILES</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center">
                    <h3>Image Upload</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="image">Choose an image to upload:</label><br>
                        <input type="file" name="image" id="image" accept="image/*" required><br><br>
                        <button type="submit">Upload Image</button>
                    </form>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
                    // File details
                    $fileName = $_FILES['image']['name'];
                    $fileTmpName = $_FILES['image']['tmp_name'];
                    $fileSize = $_FILES['image']['size'];
                    $fileError = $_FILES['image']['error'];
                    $fileType = $_FILES['image']['type'];

                    // Check if the file is an image
                    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                    if (in_array($fileExtension, $allowedExtensions) && $fileError === 0) {
                        // Define upload directory
                        $uploadDir = 'uploads/';
                        if (!is_dir($uploadDir)) {
                            mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
                        }

                        // Create unique file name to avoid overwriting
                        $uniqueFileName = uniqid('', true) . '.' . $fileExtension;

                        // Move the uploaded file to the upload directory
                        $uploadPath = $uploadDir . $uniqueFileName;
                        if (move_uploaded_file($fileTmpName, $uploadPath)) {
                            echo "<h2>Image Uploaded Successfully!</h2>";
                            echo "<div class='info'>";
                            echo "<p><strong>File Name:</strong> $fileName</p>";
                            echo "<p><strong>File Type:</strong> $fileType</p>";
                            echo "<p><strong>File Size:</strong> " . round($fileSize / 1024, 2) . " KB</p>";
                            echo "<p><strong>File Path:</strong> $uploadPath</p>";
                            echo "</div>";

                            // Display the uploaded image
                            echo "<h3>Preview:</h3>";
                            echo "<img src='$uploadPath' alt='Uploaded Image'>";
                        } else {
                            echo "<p style='color: red;'>Error uploading the image.</p>";
                        }
                    } else {
                        echo "<p style='color: red;'>Invalid file type or an error occurred. Only JPG, JPEG, PNG, and GIF files are allowed.</p>";
                    }
                }
                ?>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>