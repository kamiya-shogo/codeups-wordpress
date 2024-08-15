<?php get_header(); ?>
<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>


<section class="page-contact layout-page-margin">
    <div class="page-contact__inner inner page-body-icon">
        <?php echo do_shortcode('[contact-form-7 id="ba4491d" title="お問い合わせ確認"]'); ?>
    </div>
</section>
<?php get_footer(); ?>