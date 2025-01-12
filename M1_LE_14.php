<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 14</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 14</h1>

    <h3>Right-Angled Triangle</h3>
    <div style="border: 1px solid black; background-color:red;">
    <table>
        <?php
        $n=5;
        for($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            for($j = 1; $j <= $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>

    <h3>Inverted Triangle</h3>
    <div style="border: 1px solid black; background-color:red;">
    <table>
        <?php
        $n=5;
        for($i = $n; $i >= 1; $i--) {
            echo '<tr>';
            for($j = 1; $j <= $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>

    <h3>Pyramid pattern</h3>
    <div style="border: 1px solid black; background-color:red;">
    <table>
        <?php
        $n=5;
        for($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            for($j = 1; $j <= $n - $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: red;"></td>';
            }
            for($k = 1; $k <= (2 * $i - 1); $k++){
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>

    <h3>Diamond Pattern</h3>
    <div style="border: 1px solid black; background-color:red;">
    <table>
        <?php
        $n=5;
        for($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            for($j = 1; $j <= $n - $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: red;"></td>';
            }
            for($k = 1; $k <= (2 * $i - 1); $k++){
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        for($i = $n - 1; $i >= 1; $i--) {
            echo '<tr>';
            for($j = 1; $j <= $n - $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: red;"></td>';
            }
            for($k = 1; $k <= (2 * $i - 1); $k++){
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>

    <h3>Number Pyramid</h3>
    <div style="border: 1px solid black; background-color:red;">
    <table>
        <?php
        $n=5;
        for($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            for($j = 1; $j <= $n - $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: red;"></td>';
            }
            for($k = 1; $k <= (2 * $i - 1); $k++){
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        for($i = $n - 1; $i >= 1; $i--) {
            echo '<tr>';
            for($j = 1; $j <= $n - $i; $j++) {
                echo '<td style="width: 50px; height: 50px; background-color: red;"></td>';
            }
            for($k = 1; $k <= (2 * $i - 1); $k++){
                echo '<td style="width: 50px; height: 50px; background-color: yellow;"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>

</body>

</html>