<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 12</title>
</head>
<body>

<h1>Module 1 Lab Exercise 12</h1>

<p>Add all integers from 0 to 30 and display the total.</p>

<?php
    $total = 0;
    for($i = 0; $i <= 30; $i++) {
        $total += $i;
    }
?>

<p>Total: <?php echo $total; ?></p>

    
</body>
</html>