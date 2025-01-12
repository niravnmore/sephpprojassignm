<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 13</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 13</h1>

    <p>Use a nested loop to create a chessboard pattern (8x8 grid).</p>
    <div style="border: 1px solid black; background-color:red; width: 409px;">
    <table>
        <?php
        for($i = 1; $i <= 8; $i++) {
            echo '<tr>';
            for($j = 1; $j <= 8; $j++) {
                if(($i + $j) % 2 == 0) {
                    echo '<td style="width: 50px; height: 50px; background-color: black;"></td>';
                } else {
                    echo '<td style="width: 50px; height: 50px; background-color: white;"></td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
    <?php 
    
    ?>
    </div>

</body>

</html>