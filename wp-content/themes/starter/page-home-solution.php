<?php get_header(); ?>

<?php
$productList = [
    ['id' => '1', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
    ['id' => '2', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
    ['id' => '3', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
];
?>

<?php
// Sample PHP code to mimic the functionality of the provided React component

// Assuming a sample data structure for the products
$ProductList = [
    [
        "id" => "1",
        "name" => "Product 1",
        "description" => "Description of Product 1",
        "price" => 199.99,
        "image" => "https://sss-africa.vercel.app/assets/product-img.png"
    ],
];

function findProductById($id, $productList) {
    foreach ($productList as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
    return [
        "id" => "default",
        "name" => "Default Product",
        "description" => "This is a default product description.",
        "price" => 0.00,
        "image" => "https://sss-africa.vercel.app/assets/product-img.png"
    ];
}

// Get the product ID from the request (e.g., from URL parameters)
$productID = $_GET['id'] ?? '1'; // Default to the first product if no ID is given
$product = findProductById($productID, $ProductList);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <main>
        <section class="product-detail-section">
            <div class="product-img-side">
                <div class="display-img-wrapper">
                    <img class="display-img" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                </div>
            </div>
            <div class="product-details-side">
                <h1 class="detail-heading"><?php echo htmlspecialchars($product['name']); ?></h1>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <p><strong>Price:</strong> $<?php echo number_format($product['price'], 2); ?></p>
                <p class="subH">What can it power</p>
                <ul>
                    <li>LED Bulbs: Typically 5-10 watts each. You could power several of these.</li>
                    <li>Small Fans: Around 20-30 watts.</li>
                    <li>Phone Chargers: Usually around 5-10 watts.</li>
                    <li>Laptops: Around 30-50 watts, depending on the model.</li>
                    <li>Television: Around 50-100 watts, depending on the size and type.</li>
                    <li>Wi-Fi Router: Around 10-20 watts.</li>
                    <li>Refrigerator: Around 100-200 watts (though it cycles on and off).</li>
                    <li>Microwave: Around 800-1000 watts (for short periods).</li>
                    <li>Electric Kettle: Around 1000-1500 watts</li>
                    <li>Washing Machine: Around 500-1000 watts (depending on the cycle).</li>
                    <li>Air Conditioner: Around 1000-2000 watts (depending on the size and efficiency).</li>
                    <li>Electric Oven: Around 2000-3000 watts (for short periods).</li>
                </ul>
                <button class="btn-order snipcart-add-item"
                    data-item-id="<?php echo htmlspecialchars($product['id']); ?>"
                    data-item-price="<?php echo number_format($product['price'], 2); ?>"
                    data-item-url="/product/<?php echo htmlspecialchars($product['id']); ?>"
                    data-item-description="<?php echo htmlspecialchars($product['description']); ?>"
                    data-item-image="<?php echo htmlspecialchars($product['image']); ?>"
                    data-item-name="<?php echo htmlspecialchars($product['name']); ?>">
                    I Want This
                </button>
            </div>
        </section>
        <hr class="line">
        <section class="section-below">
            <p class="sut">Experience energy independence with the Standard Level 4 Energydock. This advanced home energy solution combines a powerful 6kVA Victron inverter with a reliable 5.4kWh LiFePO4 battery to deliver uninterrupted power.</p>
            <p class="su">Key Features</p>
            <ul>
                <li>Smart Solar Integration: Dual MPPT trackers maximize solar energy harvest.</li>
                <li>Reliable Backup Power: Robust inverter ensures consistent power supply.</li>
                <li>Long-Lasting Battery: LiFePO4 technology for extended lifespan.</li>
                <li>Easy Installation: Hassle-free setup for quick deployment.</li>
                <li>Compact Design: Fits seamlessly into your home or business.</li>
            </ul>
            <p class="su">How it Works</p>
            <p>The Energydock Standard Level 4 seamlessly integrates optional solar panels into your energy mix, reducing reliance on the grid. When the grid goes down, the system automatically switches to battery power, providing uninterrupted electricity.</p>
            <p class="su">Unmatched Quality</p>
            <p>Crafted with precision by Specialized Solar Systems and using top-tier components, the Energydock Standard Level 4 delivers exceptional performance and durability.</p>
        </section>
        <section class="products-section">
            <h2 class="featured-heading">Featured Products</h2>
            <div class="products-display">
                <?php foreach ($productList as $product): ?>
                    <div class="product-card">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <button class="btn-pd" onclick="handleViewMore()">
                            View product
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>


<?php get_footer(); ?>