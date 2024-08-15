<?php get_header(); ?>
<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

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