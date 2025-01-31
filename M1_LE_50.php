<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 50</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 50</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Multi-dimensional Array: Create a multi-dimensional array to store information about products (name,
                price, and stock). Write a script to display the information in a tabular format.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Multi-dimensional Array</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <?php
                    $products = array(
                        array("name" => "Product 1", "price" => 100, "stock" => 10),
                        array("name" => "Product 2", "price" => 200, "stock" => 20),
                        array("name" => "Product 3", "price" => 300, "stock" => 30),
                        array("name" => "Product 4", "price" => 400, "stock" => 40),
                        array("name" => "Product 5", "price" => 500, "stock" => 50)
                    );
                    ?>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($products as $product) {
                                echo "<tr>";
                                echo "<td>" . $product['name'] . "</td>";
                                echo "<td>" . $product['price'] . "</td>";
                                echo "<td>" . $product['stock'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>