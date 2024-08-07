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

<section class="contact-thanks layout-page-margin">
  <div class="contact-thanks__inner inner page-body-icon">
    <div class="contact-thanks__content">
      <p class="contact-thanks__text">お問い合わせ内容を送信完了しました。</p>
      <p class="contact-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
      </p>
    </div>
  </div>
</section>
<?php get_footer(); ?>
