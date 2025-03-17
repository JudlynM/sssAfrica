<?php get_header(); ?>

<?php
$productList = [
    ['id' => '1', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
    ['id' => '2', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
    ['id' => '3', 'name' => 'Standard L4 Energydock Victron', 'image' => 'https://sss-africa.vercel.app/assets/product-img.png', ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming there's a CSS file for styles -->
</head>
<body>
    <main>
        <section class="hero">
            <div class="side left">
                <div class="content-wrapper">
                    <h1 class="hero-heading">
                        Power Your Home with Reliable Energy
                    </h1>
                    <p>
                        Explore affordable solar and battery systems custom-designed to
                        provide your home with uninterrupted, eco-friendly power.
                    </p>
                    <button class="btn">Find a Home solution</button>
                </div>
            </div>
            <div class="side right">
                <div class="content-wrapper">
                    <h1 class="hero-heading">
                        Empower Your Business with Smart Energy
                    </h1>
                    <p>
                        Future-proof your business with scalable solar and battery
                        systems tailored to your commercial energy needs.
                    </p>
                    <button class="btn">Find a Home solution</button>
                </div>
            </div>
        </section>
        <section class="partner-section">
            <h2 class="section-heading">
                Join Our Network of Solar Resellers
            </h2>
            <p>
                Partner with Specialized Solar Solutions Africa and bring top-tier,
                reliable solar solutions to your customers.
            </p>
            <button class="btn-sn">Partner with us</button>
        </section>
        <section class="affordable-section">
            <h2 class="section-heading1">
                Affordable Back-up Power Solutions for Your Home or Business
            </h2>
            <p class="text">
                At Specialised Solar Systems Africa, we provide affordable,
                custom-designed solar solutions that are easy to install and
                maintain. Whether you are looking for a cost-effective battery
                solution or a utility-style solar solution, our products empower
                homes and businesses with reliable, eco-friendly energy—all without
                breaking the bank.
            </p>
            <p class="text">
                As trusted leaders in renewable energy solutions, we guarantee
                top-tier quality, fast delivery, and competitive pricing. You do not
                have to choose between affordability and sustainability—you can have
                both, backed by our unmatched customer service.
            </p>
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
        <section class="smart-section">
            <h2 class="section-heading green">Smart Power, Simple Choices</h2>
            <p class="text">
                Finding your perfect power solution is straightforward, stress-free,
                and simple with Specialized Solar Systems Africa. Backed by decades
                of expertise, our customised smart solutions are designed to meet
                your unique needs—without the complicated documents and confusing
                options.
            </p>
            <p class="text">
                Looking for a backup power system for your home? A small battery
                solution for your office? A comprehensive commercial energy setup?
                Whatever your requirements, our experts are here to help you make
                the right choice and understand the benefits.
            </p>
            <button class="btn">See how you benefit</button>

            <div class="banner">
                <p class="banner-heading">Power Solutions To Empower You</p>
                <p>
                    Discover how our advanced battery and energy management systems
                    can lower your costs and provide easy access to reliable,
                    uninterrupted power when you need it most. Our intuitive approach
                    promises:
                </p>
                <ul class="ul">
                    <li>Sustainable energy that reduces reliance on the grid</li>
                    <li>Superior battery management for longer-lasting power</li>
                    <li>Flexible financing options for businesses and homes</li>
                </ul>
                <button class="btn-sn">See Case Studies</button>
            </div>
            <div class="info-card">
                <div class="info-img-wrapper">
                    <img
                        class="img"
                        src="https://sss-africa.vercel.app/assets/info-img-1.png"
                        alt="info image"
                    />
                </div>
                <div class="info-text-wrapper">
                    <p class="info-text-heading">Product Features & Benefits</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur. Volutpat eget lacinia
                        vitae odio. Ipsum donec ullamcorper eget elit viverra sed. Lorem
                        ut in et facilisis ultrices mollis. Nisi tristique id integer
                        cras et ultrices enim amet. Massa molestie nisi tincidunt tortor
                        sed. Orci et vitae eu nisl.
                    </p>
                    <a class="info-link" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="info-card flip">
                <div class="info-img-wrapper">
                    <img
                        class="img"
                        src="https://sss-africa.vercel.app/assets/info-img-2.png"
                        alt="info image"
                    />
                </div>
                <div class="info-text-wrapper">
                    <p class="info-text-heading">In The News</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur. Volutpat eget lacinia
                        vitae odio. Ipsum donec ullamcorper eget elit viverra sed. Lorem
                        ut in et facilisis ultrices mollis. Nisi tristique id integer
                        cras et ultrices enim amet. Massa molestie nisi tincidunt tortor
                        sed. Orci et vitae eu nisl.
                    </p>
                    <a class="info-link" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-img-wrapper">
                    <img
                        class="img"
                        src="https://sss-africa.vercel.app/assets/info-img-3.png"
                        alt="info image"
                    />
                </div>
                <div class="info-text-wrapper">
                    <p class="info-text-heading">Sun In The Fun</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur. Volutpat eget lacinia
                        vitae odio. Ipsum donec ullamcorper eget elit viverra sed. Lorem
                        ut in et facilisis ultrices mollis. Nisi tristique id integer
                        cras et ultrices enim amet. Massa molestie nisi tincidunt tortor
                        sed. Orci et vitae eu nisl.
                    </p>
                    <a class="info-link" href="#">
                        Read More
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>


<?php get_footer();?>