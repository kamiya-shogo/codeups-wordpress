<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 5; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<?php
$body_class = is_404() ? 'body-error-404' : '';
?>

<body <?php body_class($body_class); ?>>
  <?php wp_body_open(); ?>

  <header class="header layout-header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
        <?php else : ?>
          <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps">
          </a>
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
    </div>
  <?php endif; ?>

  <button class="header__hamburger hamburger js-hamburger u-mobile">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <nav class="header__pc-nav pc-nav u-desktop">
    <ul class="pc-nav__items">
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/campaign/')); ?>">Campaign<span>キャンペーン</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/about/')); ?>">About us<span>私たちについて</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/information/')); ?>">Information<span>ダイビング情報</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog<span>ブログ</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>">Voice<span>お客様の声</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/price/')); ?>">Price<span>料金一覧</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ<span>よくある質問</span></a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact<span>お問い合わせ</span></a>
      </li>
    </ul>
  </nav>

  <nav class="header__sp-nav sp-nav js-sp-nav">
    <div class="sp-nav__inner">
      <div class="sp-nav__left">
        <ul class="sp-nav__left-items">
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>#license">ライセンス取得</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>#trial-diving">貸切体験ダイビング</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>#night-diving">ナイトダイビング</a>
          </li>
        </ul>
        <ul class="sp-nav__left-items">
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
          </li>
        </ul>
        <ul class="sp-nav__left-items">
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/information/')); ?>#license">ライセンス講習</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/information/')); ?>#trial-diving">体験ダイビング</a>
          </li>
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/information/')); ?>#fun-diving">ファンダイビング</a>
          </li>
        </ul>
        <ul class="sp-nav__left-items">
          <li class="sp-nav__left-item">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="sp-nav__right">
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
          </li>
        </ul>
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
          </li>
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>#license">ライセンス講習</a>
          </li>
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>#trial-diving">体験ダイビング</a>
          </li>
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/price/')); ?>#fun-diving">ファンダイビング</a>
          </li>
        </ul>
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
          </li>
        </ul>
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシー<br>ポリシー</a>
          </li>
        </ul>
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
          </li>
        </ul>
        <ul class="sp-nav__right-items">
          <li class="sp-nav__right-item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  </header>