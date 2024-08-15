<?php get_header(); ?>

<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-contact layout-page-margin">
  <div class="page-contact__inner inner page-body-icon">

    <?php echo do_shortcode('[contact-form-7 id="3c21383" title="お問い合わせ"]'); ?>
    <!-- wpcf7-list-itemのdisplay: block;margin-left: 0; -->
    <!-- 送信ボタン　スピナー消す -->
  </div>
</section>
<?php get_footer(); ?>