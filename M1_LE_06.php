<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 6</title>
</head>
<body>

    <h1>Module 1 Lab Exercise 6</h1>

    <form action="" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1" required> <br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2" required> <br>

        <label for="operator">Select the operator:</label><br>
        <input type="radio" name="operator" id="operator" value="Add"><label for="operator">Addition</label><br>
        <input type="radio" name="operator" id="operator" value="Subtract"><label for="operator">Substraction</label><br>
        <input type="radio" name="operator" id="operator" value="Multiply"><label for="operator">Multiplication</label><br>
        <input type="radio" name="operator" id="operator" value="Divide"><label for="operator">Division</label><br>

        <input type="submit" value="Submit">
    </form><br><br><br>

    <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            echo "The first number is: $num1 <br>";
            echo "The second number is: $num2 <br>";
            echo "The selected operator is: $operator <br>";

            if($operator == "Add"){
                echo "The sum of $num1 and $num2 is: " . ($num1 + $num2);
            }else if($operator == "Subtract"){
                echo "The difference of $num1 and $num2 is: " . ($num1 - $num2);
            }else if($operator == "Multiply"){
                echo "The product of $num1 and $num2 is: " . ($num1 * $num2);
            }else if($operator == "Divide"){
                if($num2 == 0){
                    echo "Division by zero is not possible!";
                }else{
                    echo "The division of $num1 and $num2 is: " . ($num1 / $num2);
                }
            }
        }
    ?>
    
</body>
</html>