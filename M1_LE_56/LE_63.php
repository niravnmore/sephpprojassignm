<?php
// Array of products (Each product has a name, price, and description)
$products = [
    ["name" => "Laptop", "price" => 75000, "description" => "Powerful and portable laptop with high-speed performance."],
    ["name" => "Smartphone", "price" => 45000, "description" => "Latest 5G smartphone with amazing camera features."],
    ["name" => "Headphones", "price" => 3000, "description" => "Noise-canceling wireless headphones for immersive sound."],
    ["name" => "Smartwatch", "price" => 10000, "description" => "Track your fitness and notifications on the go."],
    ["name" => "Gaming Console", "price" => 40000, "description" => "Next-gen gaming console with stunning graphics."]
];

?>


<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<main>
    <div class="grid-container">
        <h2>Product List</h2>
        <div class="product-list m-5 p-5">
            <?php foreach ($products as $product) : ?>
            <div class="product m-5 p-5">

                <span class="product-name">
                    <?= htmlspecialchars($product['name']); ?>
                </span>
                <span class="product-price">₹
                    <?= number_format($product['price'], 2); ?>
                </span>
                <span class="product-description">
                    <?= htmlspecialchars($product['description']); ?>
                </span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>