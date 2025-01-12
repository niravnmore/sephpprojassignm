<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 8</title>
</head>

<body>

    <h1>Module 1 Lab Exercise 8</h1>

    <form action="" method="post">
        <label for="category">Select a category:</label>
        <select name="category" id="category">
            <option value="none">Select a category</option>
            <option value="starter">Starter</option>
            <option value="main_course">Main Course</option>
            <option value="dessert">Dessert</option>
        </select>
        <input type="submit" value="Submit">
    </form>


    <?php

    if(isset($_POST['category'])) {
        $category = $_POST['category'];
        $dish = '';

        switch ($category) {
            case 'starter':
                $dish = 'Soup';
                break;
            case 'main_course':
                $dish = 'Grilled Chicken';
                break;
            case 'dessert':
                $dish = 'Chocolate Cake';
                break;
            default:
                $dish = 'N/A';
                break;
        }

        echo "Category: $category <br>";
        echo "Dish: $dish";
    }
?>

</body>

</html>