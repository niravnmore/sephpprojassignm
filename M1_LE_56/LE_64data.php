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

<main>
    <div class="comtent">
        <h2 class="text-center mb-5">Product List</h2>
        <div class="grid-container-list m-5 p-5">
            <?php foreach ($products as $product): ?>
                                            <div class="box m-5 p-5">
                                                <p class="product-name p-5">
                                                    <?= htmlspecialchars($product['name']); ?>
                                                </p>
                                                <p class="product-price p-5">₹
                                                    <?= number_format($product['price'], 2); ?>
                                                </p>
                                                <p class="product-description p-5">
                                                    <?= htmlspecialchars($product['description']); ?>
                                                </p>
                                            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>