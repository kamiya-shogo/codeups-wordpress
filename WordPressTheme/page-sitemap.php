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
      <h1 class="page-mv__title">site <span class="page-mv__title-uppercase">map</span></h1>
    </div>
  </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="site-map layout-page-margin">
  <div class="site-map__inner inner page-body-icon">

    <nav class="site-map__nav site-map-nav">
      <div class="site-map-nav__left">
        <div class="site-map-nav__left-container">
          <ul class="site-map-nav__left-items">
            <li class="site-map-nav__left-item">
              <a href="campaign.html">キャンペーン</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="campaign.html#license">ライセンス取得</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="campaign.html#trial-diving">貸切体験ダイビング</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="campaign.html#night-diving">ナイトダイビング</a>
            </li>
          </ul>
          <ul class="site-map-nav__left-items">
            <li class="site-map-nav__left-item">
              <a href="about.html">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="site-map-nav__left-container">
          <ul class="site-map-nav__left-items">
            <li class="site-map-nav__left-item">
              <a href="information.html">ダイビング情報</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="information.html#license">ライセンス講習</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="information.html#trial-diving">体験ダイビング</a>
            </li>
            <li class="site-map-nav__left-item">
              <a href="information.html#fun-diving">ファンダイビング</a>
            </li>
          </ul>
          <ul class="site-map-nav__left-items">
            <li class="site-map-nav__left-item">
              <a href="archive-blog.html">ブログ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="site-map-nav__right">
        <div class="site-map-nav__right-container">
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="voice.html">お客様の声</a>
            </li>
          </ul>
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="price.html">料金一覧</a>
            </li>
            <li class="site-map-nav__right-item">
              <a href="price.html#license">ライセンス講習</a>
            </li>
            <li class="site-map-nav__right-item">
              <a href="price.html#trial-diving">体験ダイビング</a>
            </li>
            <li class="site-map-nav__right-item">
              <a href="price.html#fun-diving">ファンダイビング</a>
            </li>
          </ul>
        </div>
        <div class="site-map-nav__right-container">
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="faq.html">よくある質問</a>
            </li>
          </ul>
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a>
            </li>
          </ul>
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="terms-of-service.html">利用規約</a>
            </li>
          </ul>
          <ul class="site-map-nav__right-items">
            <li class="site-map-nav__right-item">
              <a href="contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>
<?php get_footer(); ?>