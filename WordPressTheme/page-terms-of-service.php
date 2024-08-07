<?php get_header(); ?>
<!-- メインビュー -->
<div class="page-mv js-page-mv">
  <div class="page-mv__inner">
    <div class="page-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page/page-terms-privacy-mv.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page/page-terms-privacy-sp-mv.jpg" alt="緑色のイソギンチャクのそばで小さな最中の群れが泳いでおり、陽の光が差し込んでいる様子">
      </picture>
    </div>
    <div class="page-mv__content">
      <h1 class="page-mv__title">terms of <span class="page-mv__title-capitalize">service</span></h1>
    </div>
  </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="privacy-policy layout-page-margin">
  <div class="privacy-policy__inner inner page-body-icon">
    <div class="privacy-policy__body page-content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>