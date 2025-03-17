<?php
/**
 * Template for displaying all WooCommerce pages
 * @package Bootscore
 */

get_header();
?>

<style>
  .product_cat_hero {
    padding-top: 100px;
    height: 500px;
    background-size: contain;
    background-position: 55%;
    background-repeat: no-repeat;
    color: #fff;
  }
  .page-title, .term-description { display: none; }

  /* Responsive styles */
  @media (max-width: 768px) {
    .cta-heading { font-size: 24px; text-align: center; }
    .cta-text, .cta-list { font-size: 12px; text-align: center; }
  }

  @media (max-width: 480px) {
    .cta-heading { font-size: 20px; }
    .cta-text, .cta-list { font-size: 10px; }
  }
</style>

<?php if (is_shop()) : ?>

  <div class="container-fluid" style="background-size: cover; min-height: 90vh; background-image: url(<?php echo get_template_directory_uri(); ?>/img/main.png);" id="blog-header">
    <div class="row">
      <div class="col-md-8 p-0" style="margin-top: 200px;">
        <nav class="breadcrumb" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
        <h1 class="text-white mb-5" style="font-weight: 700; font-size: 60px;">Power Products for Every Need</h1>
        <p class="lead text-white mb-5">Discover our wide range of high-quality renewable energy products.</p>
      </div>
    </div>
  </div>

<?php endif; ?>

<div class="container-fluid p-0">
  <?php if (is_product_category()) :
    $cat = get_queried_object();
    $image_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
    $image = wp_get_attachment_url($image_id);
    if ($image) : ?>
  
        <div class="container-fluid p-0" style="background-size: cover; height: 90vh; background-image: url('<?php echo $image ?>')" id="blog-header">
          <div class="row">
            <div class="col-md-8 p-0" style="margin-top: 500px;">
              <nav class="breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Products</li>
                  <li class="breadcrumb-item active"><?php single_term_title(); ?></li>
                </ol>
              </nav>
              <h1 class="text-white mb-5" style="font-weight: 700; font-size: 60px;"><?php single_term_title(); ?></h1>
            </div>
          </div>
        </div>

    <?php endif; ?>
  <?php endif; ?>
</div>

<div id="content" class="site-content container-fluid mt-5">
  <div class="row">
    <div class="col-sm-6 order-2">
      <div id="primary" class="content-area">
        <main id="main" class="site-main mb-5">
          <?php woocommerce_content(); ?>
        </main>
      </div>
    </div>
    <div class="col-sm-2">
      <?php echo do_shortcode('[fe_widget title="Filters" id="42257" show_selected="yes" show_count="yes"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>