<?php if (!is_404() && !is_page('contact') && !is_page('confirm') && !is_page('complete')) : ?>

  <section class="contact layout-contact layout-contact--page">
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
              <h3 class="section-heading__subtitle section-heading__subtitle--contact">お問い合わせ</h3>
            </div>
            <p class="contact-content__contact-text">ご予約・お問い合わせはコチラ</p>
            <div class="contact-content__contact-btn btn-center">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--contactus"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (is_404()) : ?>
  <footer class="footer js-footer">
  <?php else : ?>
  <footer class="footer layout-footer js-footer">
<?php endif; ?>
  <div class="footer__inner inner">
    <div class="footer__heading">
      <div class="footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo.svg" alt="CodeUps">
        </a>
      </div>
      <div class="footer__icon">
        <div class="footer__facebook-img">
          <a href="#" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-icon.svg" alt="facebook">
          </a>
        </div>
        <div class="footer__instagram-img">
          <a href="#" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.svg" alt="instagram">
          </a>
        </div>
      </div>
    </div>

    <nav class="footer__nav footer-nav">
      <div class="footer-nav__left">
        <div class="footer-nav__left-container">
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/campaign/')); ?>#license">ライセンス取得</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/campaign/')); ?>#trial-diving">貸切体験ダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/campaign/')); ?>#night-diving">ナイトダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="footer-nav__left-container">
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/information/')); ?>?tabId=tab1">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/information/')); ?>?tabId=tab2">体験ダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/information/')); ?>?tabId=tab3">ファンダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-nav__right">
        <div class="footer-nav__right-container">
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/price/')); ?>#license">ライセンス講習</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/price/')); ?>#trial-diving">体験ダイビング</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/price/')); ?>#fun-diving">ファンダイビング</a>
            </li>
          </ul>
        </div>
        <div class="footer-nav__right-container">
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <small class="copyright">
      Copyright &copy; 2021 - <?php echo wp_date("Y"); ?> CodeUps LLC. All Rights Reserved.
    </small>
  </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

</html>