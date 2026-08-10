<?php
/**
 * Releve Brands homepage — futuristic owner proof.
 */
get_header();
$asset_base = get_template_directory_uri() . '/assets/img/releve/';
$hero_products = [
    ['Topical Ointment', '$25.00', 'products-web/topical-ointment.jpg'],
    ['Healing Balm', '$25.00', 'products-web/healing-balm.jpg'],
    ['CBD Gummies', '$25.00', 'products-web/cbd-gummies-full-spectrum.jpg'],
];
$products = [
    ['Shower Steamer Spray', '$15.00', 'products-web/shower-steamer-spray.jpg', 'Aromatherapy'],
    ['Bug Spray 8 oz Refill', '$30.00', 'products-web/bug-spray-8-oz-refill-no-spray-too.jpg', 'Refills'],
    ['Hair Tonic 8 oz Refill', '$55.00', 'products-web/hair-tonic-8-oz.jpg', 'Refills'],
    ['Make-Up Remover', '$12.00', 'products-web/make-up-remover.jpg', 'Body Care'],
    ['Lip Balm', '$8.00', 'products-web/lip-balm.jpg', 'Body Care'],
    ['Bath Salts', '$25.00', 'products-web/bath-salts.jpg', 'Bath Care'],
    ['Hair Tonic', '$15.00', 'products-web/hair-tonic.jpg', 'Hair Care'],
    ['Bug Spray', '$8.00', 'products-web/bug-spray.jpg', 'Outdoor'],
    ['Essential Oil Inhalers', '$5.00', 'products-web/essential-oil-inhalers.jpg', 'Aromatherapy'],
];
?>
<main id="primary" class="site-main future-home">
    <section class="future-hero">
        <div class="future-glow glow-a"></div>
        <div class="future-glow glow-b"></div>
        <div class="future-hero-copy">
            <p class="eyebrow">Releve Brands • Future Wellness Storefront</p>
            <h1>Natural relief with a sharper digital edge.</h1>
            <p class="future-lede">A modern blue wellness experience built around Releve’s current product lineup, high-resolution imagery, clear prices, and a review-ready shopping flow.</p>
            <div class="hero-actions">
                <a class="button primary" href="shop.html">Shop Products</a>
                <a class="button secondary" href="#future-lineup">View Lineup</a>
            </div>
            <div class="future-stats">
                <span><strong>12</strong> Products</span>
                <span><strong>HD</strong> Images</span>
                <span><strong>Demo</strong> Cart</span>
            </div>
        </div>
        <div class="future-stage organized-stage" aria-label="Featured Releve products">
            <article class="future-main-product">
                <span>Featured Relief</span>
                <img src="<?php echo esc_url($asset_base . 'products-web/topical-ointment.jpg'); ?>" alt="Releve Topical Ointment">
                <div><h3>Topical Ointment</h3><p>$25.00</p></div>
            </article>
            <div class="future-side-products">
                <article>
                    <img src="<?php echo esc_url($asset_base . 'products-web/healing-balm.jpg'); ?>" alt="Releve Healing Balm">
                    <div><h3>Healing Balm</h3><p>$25.00</p></div>
                </article>
                <article>
                    <img src="<?php echo esc_url($asset_base . 'products-web/cbd-gummies-full-spectrum.jpg'); ?>" alt="Releve CBD Gummies">
                    <div><h3>CBD Gummies</h3><p>$25.00</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="future-strip" aria-label="Releve benefits">
        <span>CBD Wellness</span><span>Pain Relief</span><span>Aromatherapy</span><span>Body Care</span><span>Outdoor Essentials</span>
    </section>

    <section id="future-lineup" class="future-section-head">
        <p class="eyebrow">Current Releve Lineup</p>
        <h2>Every product gets a premium card.</h2>
        <p>Clear product names, prices, and sharp visuals so the owner can review the full store experience quickly.</p>
    </section>

    <section class="future-product-grid">
        <?php foreach ($products as [$name, $price, $image, $tag]) : ?>
            <article>
                <span><?php echo esc_html($tag); ?></span>
                <img src="<?php echo esc_url($asset_base . $image); ?>" alt="<?php echo esc_attr('Releve ' . $name); ?>">
                <h3><?php echo esc_html($name); ?></h3>
                <p class="product-price"><?php echo esc_html($price); ?></p>
                <a class="button secondary demo-add-home" href="shop.html">Add to Cart</a>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="future-split">
        <div>
            <p class="eyebrow">Owner Review Ready</p>
            <h2>Modern presentation now, real WooCommerce checkout when hosted.</h2>
            <p>This proof is now self-contained for review. The demo cart shows the shopping flow; final payment/cart checkout requires the WordPress site to be on real hosting.</p>
            <a class="button light" href="shop.html">Open Shop</a>
        </div>
        <div class="future-orbit">
            <img src="<?php echo esc_url($asset_base . 'products-web/shower-steamer-spray.jpg'); ?>" alt="Shower Steamer Spray">
            <img src="<?php echo esc_url($asset_base . 'products-web/essential-oil-inhalers.jpg'); ?>" alt="Essential Oil Inhalers">
            <img src="<?php echo esc_url($asset_base . 'products-web/bug-spray.jpg'); ?>" alt="Bug Spray">
        </div>
    </section>
</main>
<?php get_footer(); ?>
