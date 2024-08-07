<?php get_header(); ?>
<!-- メインビュー -->
<div class="page-mv js-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact/page-contact-mv.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact/page-contact-sp-mv.jpg" alt="波打ち際の上空からの様子">
            </picture>
        </div>
        <div class="page-mv__content">
            <h1 class="page-mv__title">contact</h1>
        </div>
    </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>


<section class="page-contact layout-page-margin">
    <div class="page-contact__inner inner page-body-icon">
        <?php echo do_shortcode('[contact-form-7 id="ba4491d" title="お問い合わせ確認"]'); ?>
    </div>
</section>
<?php get_footer(); ?>