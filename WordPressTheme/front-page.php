<?php get_header(); ?>
<main>

  <div class="top-mv js-top-mv">
    <div class="top-mv__inner">
      <div class="swiper top-mv__swiper js-top-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-img1.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-sp-img1.jpg" alt="ウミガメが浅瀬の綺麗な海で泳いでいる様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-img2.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-sp-img2.jpg" alt="ウミガメと人が泳いでいる様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-img3.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-sp-img3.jpg" alt="青空と海、山が写っている様子">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-img4.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-mv-sp-img4.jpg" alt="砂浜と透き通った海に人がいる様子">
            </picture>
          </div>
        </div>
      </div>
      <div class="top-mv__content">
        <h2 class="top-mv__title">diving</h2>
        <p class="top-mv__subtitle">into the ocean</p>
      </div>
    </div>
  </div>

  <section class="campaign layout-campaign">
    <div class="inner campaign__inner">
      <div class="campaign__section-heading  section-heading">
        <p class="section-heading__title"><span class="title-green">C</span>ampaign</p>
        <h2 class="section-heading__subtitle">キャンペーン</h2>
      </div>

      <?php
      $args = [
        "post_type" => "campaign",
        "posts_per_page" => 8,
      ];
      $terms = get_terms([
        'taxonomy' => 'campaign_category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
      ]);
      $the_query = new WP_Query($args);
      ?>

      <div class="swiper campaign__swiper js-campaign-swiper">
        <?php if ($the_query->have_posts()) : ?>
          <ul class="campaign__cards swiper-wrapper">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="campaign__card campaign-card swiper-slide">
                <div class="campaign-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </div>
                <div class="campaign-card__content">
                  <?php
                  $post_terms = wp_get_post_terms(get_the_ID(), 'campaign_category');
                  if (!empty($post_terms) && !is_wp_error($post_terms)) {
                    foreach ($post_terms as $term) {
                      echo '<p class="campaign-card__tag">' . esc_html($term->name) . '</p>';
                    }
                  }
                  ?>
                  <p class="campaign-card__title"><?php the_title(); ?></p>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
                    <p class="campaign-card__price-after"><?php the_field('campaign_2'); ?></p>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <!-- ここに投稿がない場合の記述 -->
            <p>記事が投稿されていません</p>
          <?php endif;
        wp_reset_postdata(); ?>
          </ul>
      </div>
      <div class="swiper-button-prev u-desktop"></div>
      <div class="swiper-button-next u-desktop"></div>
      <div class="campaign__btn">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button"><span>View more</span></a>
      </div>
    </div>
  </section>

  <section class="about layout-about">
    <div class="inner about__inner">
      <div class="about__section-heading  section-heading">
        <p class="section-heading__title"><span class="title-green">A</span>bout us</p>
        <h2 class="section-heading__subtitle">私たちについて</h2>
      </div>

      <div class="about__content about-content">
        <div class="about-content__img-wrap">
          <div class="about-content__img1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us1.jpg" alt="オレンジ色の屋根にシーサーが乗っており、木の枝と青空が写っている様子">
          </div>
          <div class="about-content__img2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-us2.jpg" alt="黒色と黄色の2色の魚が2匹、青い海を泳いでいる様子">
          </div>
        </div>
        <div class="about-content__body">
          <h2 class="about-content__body-title">Dive into <br>the Ocean</h2>
          <div class="about-content__body-right">
            <p class="about-content__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <div class="about-content__btn btn-center">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="button"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__section-heading  section-heading">
        <p class="section-heading__title"><span class="title-green">I</span>nformation</p>
        <h2 class="section-heading__subtitle">ダイビング情報</h2>
      </div>

      <div class="information__content information-content">
        <div class="information-content__img colorbox js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-img.jpg" alt="海の中でイソギンチャクの近くを複数の魚が泳いでいる様子">
        </div>
        <div class="information-content__body">
          <h3 class="information-content__body-title">ライセンス講習</h3>
          <p class="information-content__body-text text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information-content__btn btn-center">
            <a href="<?php echo esc_url(home_url('/information')); ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog layout-blog">
    <div class="blog__bg u-desktop">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" alt="水をズームで撮った様子">
    </div>
    <div class="blog__inner inner">
      <div class="blog__section-heading section-heading">
        <p class="section-heading__title section-heading__title--white"><span class="title-green title-green--green2">B</span>log</p>
        <h2 class="section-heading__subtitle section-heading__subtitle--white">ブログ</h2>
      </div>
      <?php
      $args = [
        "post_type" => "post",
        "posts_per_page" => 3,
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="blog__cards blog-cards-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="blog-cards-list__item blog-card">
              <a href="<?php the_permalink(); ?>">
                <div class="blog-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
                  <h3 class="blog-card__title"><?php the_title(); ?></h3>
                  <p class="blog-card__text  text"><?php the_content(); ?> </p>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <!-- ここに投稿がない場合の記述 -->
          <p>記事が投稿されていません</p>
        <?php endif;
      wp_reset_postdata(); ?>
        </ul>
        <div class="blog__btn btn-center">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><span>View more</span></a>
        </div>
    </div>
  </section>

  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__section-heading section-heading">
        <p class="section-heading__title"><span class="title-green">V</span>oice</p>
        <h2 class="section-heading__subtitle">お客様の声</h2>
      </div>
      <?php
      $args = [
        "post_type" => "voice",
        "posts_per_page" => 2,
      ];
      $terms = get_terms([
        'taxonomy' => 'voice_category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
      ]);
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="voice__cards voice-cards-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="voice-cards-list__item voice-card">
              <div class="voice-card__heading">
                <div class="voice-card__heading-wrapper">
                  <div class="voice-card__heading-wrap">
                    <p class="voice-card__heading-age"><?php the_field('voice_1'); ?></p>
                    <?php
                    $post_terms = wp_get_post_terms(get_the_ID(), 'voice_category');
                    if (!empty($post_terms) && !is_wp_error($post_terms)) {
                      foreach ($post_terms as $term) {
                        echo '<p class="voice-card__heading-tag">' . esc_html($term->name) . '</p>';
                      }
                    }
                    ?>
                  </div>
                  <h3 class="voice-card__heading-title"><?php the_title(); ?></h3>
                </div>

                <div class="voice-card__heading-img colorbox js-colorbox colorbox js-colorbox">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </div>
              </div>
              <p class="voice-card__text">
                <?php the_content(); ?>
              </p>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <!-- ここに投稿がない場合の記述 -->
          <p>記事が投稿されていません</p>
        <?php endif;
      wp_reset_postdata(); ?>
        </ul>
        <div class="voice__btn btn-center">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button"><span>View more</span></a>
        </div>
    </div>
  </section>

  <section class="price layout-price">
    <div class="inner">
      <div class="price__section-heading section-heading">
        <p class="section-heading__title"><span class="title-green">P</span>rice</p>
        <h2 class="section-heading__subtitle">料金一覧</h2>
      </div>

      <div class="price__wrapper">
        <div class="price__img colorbox js-colorbox">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp-img.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-img.jpg" alt="海の中の岩に小さな赤い魚が複数匹泳いでいる様子">
          </picture>
        </div>
        <div class="price__contents">
          <div class="price__content">
            <h3 class="price__content-title">ライセンス講習</h3>
            <ul class="price__content-items">
              <?php
              $custom_field_values = SCF::get_option_meta('theme-price', 'license');
              $index = 0; // インデックスを追加
              foreach ($custom_field_values as $custom_field_value) :
              ?>
                <li class="price__content-item">
                  <dl>
                    <dt class="price__content-text"><?php echo $custom_field_value["license-course-content"]; ?></dt>
                    <dd class="price__content-cost"><?php echo $custom_field_value["license-course-price"]; ?></dd>
                  </dl>
                </li>
              <?php
                $index++; // インデックスをインクリメント
              endforeach;
              ?>
            </ul>
          </div>
          <div class="price__content">
            <h3 class="price__content-title">体験ダイビング</h3>
            <ul class="price__content-items">
              <?php
              $custom_field_values = SCF::get_option_meta('theme-price', 'experience');
              $index = 0; // インデックスを追加
              foreach ($custom_field_values as $custom_field_value) :
              ?>
                <li class="price__content-item">
                  <dl>
                    <dt class="price__content-text"><?php echo $custom_field_value["experience-course-content"]; ?></dt>
                    <dd class="price__content-cost"><?php echo $custom_field_value["experience-course-price"]; ?></dd>
                  </dl>
                </li>
              <?php
                $index++; // インデックスをインクリメント
              endforeach;
              ?>
            </ul>
          </div>
          <div class="price__content">
            <h3 class="price__content-title">ファンダイビング</h3>
            <ul class="price__content-items">
              <?php
              $custom_field_values = SCF::get_option_meta('theme-price', 'fun');
              $index = 0; // インデックスを追加
              foreach ($custom_field_values as $custom_field_value) :
              ?>
                <li class="price__content-item">
                  <dl>
                    <dt class="price__content-text"><?php echo $custom_field_value["fun-course-content"]; ?></dt>
                    <dd class="price__content-cost"><?php echo $custom_field_value["fun-course-price"]; ?></dd>
                  </dl>
                </li>
              <?php
                $index++; // インデックスをインクリメント
              endforeach;
              ?>
            </ul>
          </div>
          <div class="price__content">
            <h3 class="price__content-title">スペシャルダイビング</h3>
            <ul class="price__content-items">
              <?php
              $custom_field_values = SCF::get_option_meta('theme-price', 'special');
              $index = 0; // インデックスを追加
              foreach ($custom_field_values as $custom_field_value) :
              ?>
                <li class="price__content-item">
                  <dl>
                    <dt class="price__content-text"><?php echo $custom_field_value["special-course-content"]; ?></dt>
                    <dd class="price__content-cost"><?php echo $custom_field_value["special-course-price"]; ?></dd>
                  </dl>
                </li>
              <?php
                $index++; // インデックスをインクリメント
              endforeach;
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="price__btn btn-center">
        <a href="<?php echo esc_url(home_url('/price')); ?>" class="button"><span>View more</span></a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>