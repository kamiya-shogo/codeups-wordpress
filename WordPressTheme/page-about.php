<?php get_header(); ?>

<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-about layout-page-margin">
  <div class="page-about__inner inner page-body-icon">
    <div class="page-about__content about-content">
      <div class="about-content__img-wrap">
        <div class="about-content__img1 u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us1.jpg" alt="オレンジ色の屋根にシーサーが乗っており、木の枝と青空が写っている様子">
        </div>
        <div class="about-content__img2 about-content__img2--page">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us2.jpg" alt="黒色と黄色の2色の魚が2匹、青い海を泳いでいる様子">
        </div>
      </div>
      <div class="about-content__body about-content__body--page">
        <h2 class="about-content__body-title about-content__body-title--page">Dive into <br>the Ocean</h2>
        <div class="about-content__body-right about-content__body-right--page">
          <p class="about-content__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="page-about__body">
      <div class="page-about__section-heading  section-heading">
        <h3 class="section-heading__title"><span class="title-green">G</span>allery</h3>
        <h2 class="section-heading__subtitle">フォト</h2>
      </div>

      <div class="page-about__gallery">
        <ul class="page-about__gallery-list page-about-gallery-list">
          <?php
          $custom_field_values = SCF::get_option_meta('theme-gallery', 'about-gallery');
          $index = 0; // インデックスを追加
          foreach ($custom_field_values as $custom_field_value) :
            $image = wp_get_attachment_image_src($custom_field_value['about-gallery-img'], 'full');
            $modal_id = "modal-" . $index; // 各モーダルに一意のIDを割り当てる
          ?>
            <li class="page-about-gallery-list__wrap">
              <div class="page-about-gallery-list__item js-modal-open" data-target="<?php echo $modal_id; ?>">
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $custom_field_value["about-img-alt"]; ?>" />
              </div>
              <div class="page-about-gallery-list__modal  page-about-modal js-page-about-modal js-modal-close" id="<?php echo $modal_id; ?>">
                <div class="page-about-modal__inner">
                  <div class="page-about-modal__img">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $custom_field_value["about-img-alt"]; ?>" />
                  </div>
                </div>
              </div>
            </li>
          <?php
            $index++; // インデックスをインクリメント
          endforeach;
          ?>

        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>