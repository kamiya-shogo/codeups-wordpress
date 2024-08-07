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

    <?php echo do_shortcode('[contact-form-7 id="3c21383" title="お問い合わせ"]'); ?>
    <!-- wpcf7-list-itemのdisplay: block;margin-left: 0; -->
    <!-- 送信ボタン　スピナー消す -->
  </div>
</section>
<?php get_footer(); ?>

<div class="page-contact">
  <div class="page-contact__fv">
    <h1 class="page-contact__title">確認画面</h1>
  </div>
  <p class="page-contact__text">入力内容をご確認ください。</p>
  <dl class="page-contact__list">
    <div class="page-contact__item">
      <dt class="page-contact__term">お名前<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "name-1"]
      </dd>
    </div>
    <div class="page-contact__item">
      <dt class="page-contact__term">メールアドレス<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "email-1"]
      </dd>
    </div>
    <div class="page-contact__item">
      <dt class="page-contact__term">電話番号<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "tel-1"]
      </dd>
    </div>
    <div class="page-contact__item">
      <dt class="page-contact__term">お問い合わせ項目<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "checkbox-1"]
      </dd>
    </div>
    <div class="page-contact__item">
      <dt class="page-contact__term">キャンペーン<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "menu-1"]
      </dd>
    </div>
    <div class="page-contact__item">
      <dt class="page-contact__term">お問合せ内容<span class="contact__required">*</span></dt>
      <dd class="page-contact__definition">
        [multiform "textarea-1"]
      </dd>
    </div>
  </dl>
  <div class="page-contact__buttons">
    [previous class:contact__back-button "入力画面に戻る"]
    [submit class:contact__submit-input "送信する"]
    [multistep multistep-584 last_step send_email "/contact/confirm/complete/"]
  </div>
</div>