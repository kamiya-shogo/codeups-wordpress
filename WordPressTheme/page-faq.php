<?php get_header(); ?>
<!-- メインビュー -->
<div class="page-mv js-page-mv">
  <div class="page-mv__inner">
    <div class="page-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq/page-faq-mv.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq/page-faq-sp-mv.jpg" alt="青空と綺麗な海の砂浜に人がいる様子">
      </picture>
    </div>
    <div class="page-mv__content">
      <h1 class="page-mv__title page-mv__title--uppercase">faq</h1>
    </div>
  </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-faq layout-page-margin">
  <div class="page-faq__inner inner page-body-icon">
    <ul class="page-faq__list page-faq-list">

      <?php
      $custom_field_values = SCF::get_option_meta('theme-faq', 'faq');
      $index = 0; // インデックスを追加
      foreach ($custom_field_values as $custom_field_value) :
      ?>

        <li class="page-faq-list__item">
          <h2 class="page-faq-list__item-question js-page-faq-question is-open"><?php echo $custom_field_value["faq-question"]; ?></h2>
          <p class="page-faq-list__item-answer js-accordion">
            <?php echo $custom_field_value["faq-answer"]; ?></p>
        </li>
      <?php
        $index++; // インデックスをインクリメント
      endforeach;
      ?>
    </ul>
  </div>
</section>

<section class="contact layout-contact layout-contact--faq">
  <div class="contact__inner inner">
    <div class="contact__content contact__content--page contact-content">
      <div class="contact-content__wrap">
        <div class="contact-content__info">
          <div class="contact-content__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg" alt="CodeUps">
          </div>
          <div class="contact-content__desc">
            <div class="contact-content__desc-wrap">
              <p class="contact-content__desc-text text">沖縄県那覇市1-1</p>
              <p class="contact-content__desc-text text">TEL:0120-000-0000</p>
              <p class="contact-content__desc-text text">営業時間:8:30-19:00</p>
              <p class="contact-content__desc-text text">定休日:毎週火曜日</p>
            </div>
            <div class="contact-content__desc-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57273.02319558785!2d127.64350250243365!3d26.210859430338598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1695993733423!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact-content__contact">
          <div class="contact-content__heading section-heading">
            <p class="section-heading__title section-heading__title--contact"><span class="title-green">C</span>ontact</p>
            <h2 class="section-heading__subtitle section-heading__subtitle--contact">お問い合わせ</h2>
          </div>
          <p class="contact-content__contact-text">ご予約・お問い合わせはコチラ</p>
          <div class="contact-content__contact-btn btn-center">
            <a href="contact.html" class="button"><span>Contact us</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>