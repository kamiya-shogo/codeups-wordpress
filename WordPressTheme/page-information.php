<?php get_header(); ?>


<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-information layout-page-margin">
  <div class="page-information__inner inner page-body-icon">
    <div class="page-information__tab page-information-tab">
      <ul class="page-information-tab__menu">
        <li class="page-information-tab__menu-item js-page-information-tab-menu is-active" data-tab-id="tab1">
          <div class="page-information-tab__menu-item-img u-desktop">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-icon1.svg" alt="クジラのアイコン">
          </div>
          <h2 class="page-information-tab__menu-item-text">ライセンス<br class="u-mobile">講習</h2>
        </li>
        <li class="page-information-tab__menu-item js-page-information-tab-menu" data-tab-id="tab3">
          <div class="page-information-tab__menu-item-img u-desktop">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-icon2.svg" alt="サメのアイコン">
          </div>
          <h2 class="page-information-tab__menu-item-text">ファン<br class="u-mobile">ダイビング</h2>
        </li>
        <li class="page-information-tab__menu-item js-page-information-tab-menu" data-tab-id="tab2">
          <div class="page-information-tab__menu-item-img u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-icon3.svg" alt="魚のアイコン">
          </div>
          <h2 class="page-information-tab__menu-item-text">体験<br class="u-mobile">ダイビング</h2>
        </li>
      </ul>
      <ul class="page-information-tab__content">
        <li class="page-information-tab__content-item js-page-information-tab-content is-active">
          <div class="page-information-tab__content-item-body information-content information-content--page">
            <div class="information-content__img information-content__img--page">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-img1.jpg" alt="ダイビングをしている人の海の上からの様子">
            </div>
            <div class="information-content__body information-content__body--page">
              <h3 class="information-content__body-title information-content__body-title--page">ライセンス講習</h3>
              <p class="information-content__body-text text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
          </div>
        </li>
        <li class="page-information-tab__content-item js-page-information-tab-content">
          <div class="page-information-tab__content-item-body information-content information-content--page">
            <div class="information-content__img information-content__img--page">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-img2.jpg" alt="青色の海の中を小さい魚が群れで泳いでいる様子">
            </div>
            <div class="information-content__body information-content__body--page">
              <h3 class="information-content__body-title information-content__body-title--page">ファンダイビング</h3>
              <p class="information-content__body-text text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
          </div>
        </li>
        <li class="page-information-tab__content-item js-page-information-tab-content">
          <div class="page-information-tab__content-item-body information-content information-content--page">
            <div class="information-content__img information-content__img--page">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/page-information-img3.jpg" alt="体が白色で尾鰭が黄色の魚2匹が、海の中を泳いでいる様子">
            </div>
            <div class="information-content__body information-content__body--page">
              <h3 class="information-content__body-title information-content__body-title--page">体験ダイビング</h3>
              <p class="information-content__body-text text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>