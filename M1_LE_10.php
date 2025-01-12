<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 10</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 10</h1>

    <form action="" method="post">
        <label for="color">Select a color:</label>
        <select name="color" id="color">
            <option value="none">Select a color</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    
<?php
    

    if(isset($_POST['color'])) {
        $color = $_POST['color'];
        $hex = '';
        
        switch ($color) {
            case 'red':
                $hex = '#FF0000';
                break;
            case 'green':
                $hex = '#00FF00';
                break;
            case 'blue':
                $hex = '#0000FF';
                break;
            default:
                $hex = 'N/A';
                break;
        }
        
        echo "Color: $color <br>";
        echo "Hex: $hex";
    }

?>

</body>

</html>