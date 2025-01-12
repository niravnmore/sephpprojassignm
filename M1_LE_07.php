<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 7</title>
</head>
<body>

    <h1>Module 1 Lab Exercise 7</h1>

    Today's date is: <?php echo date("Y-m-d"); ?><br><br>

    <?php 
    
    $currentDate = date("l"); // Get the current day of the week

    if ($currentDate === "Sunday") {
        echo "Happy Sunday!";
    } else {
        echo "Today is $currentDate";
    }
     
    ?>
    
</body>
</html>