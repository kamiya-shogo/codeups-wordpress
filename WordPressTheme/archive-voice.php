<?php get_header(); ?>
<!-- メインビュー -->
<div class="page-mv js-page-mv">
  <div class="page-mv__inner">
    <div class="page-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/voice/page-voice-mv.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice/page-voice-sp-mv.jpg" alt="透き通る海の中を小さな魚の群れが泳いている様子">
      </picture>
    </div>
    <div class="page-mv__content">
      <h1 class="page-mv__title">voice</h1>
    </div>
  </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>
<!-- <div class="breadcrumb breadcrumb-margin"> -->
<!-- <div class="breadcrumb__inner">
    <span>
      <a href="index.html">
        <span>TOP</span>
      </a>
    </span>
    &nbsp;&gt;&nbsp;
    <span>
      <span class="current-item">ブログ一覧</span>
    </span>
  </div>
</div> -->

<section class="page-voice layout-page-margin">
  <div class="page-voice__inner inner page-body-icon">
    <div class="page-voice__category">
      <ul class="page-voice__category-menu">
        <?php
        $terms = get_terms([
          'taxonomy' => 'voice_category',
          'hide_empty' => false,
          'orderby' => 'name',
          'order' => 'ASC',
        ]);
        // タームが存在し、エラーでない場合にタブを表示
        if (!empty($terms) && !is_wp_error($terms)) {
          // 全ての投稿を表示するタブ
          echo '<li class="page-voice__category-item is-active"><a href="' . esc_url(get_post_type_archive_link('voice')) . '" class="' . (is_post_type_archive('voice') ? 'is-active' : '') . '">all</a></li>';
          // 各タームのタブを生成
          foreach ($terms as $term) {
            echo '<li class="page-voice__category-item"><a href="' . esc_url(get_term_link($term)) . '" class="' . (is_tax('voice_category', $term->slug) ? 'is-active' : '') . '">' . esc_html($term->name) . '</a></li>';
          }
        }
        ?>
      </ul>

      <?php if (have_posts()) : ?>

        <ul class="page-voice__cards voice-cards-list">

          <?php while (have_posts()) : the_post(); ?>
            <li class="voice-cards-list__item voice-card">
              <div class="voice-card__heading">
                <div class="voice-card__heading-wrapper">
                  <div class="voice-card__heading-wrap">
                    <p class="voice-card__heading-age"><?php the_field('voice_1'); ?></p>

                    <!-- 投稿ごとのタクソノミーのタームを表示 -->
                    <?php
                    $post_terms = wp_get_post_terms(get_the_ID(), 'voice_category');
                    if (!empty($post_terms) && !is_wp_error($post_terms)) {
                      foreach ($post_terms as $term) {
                        echo '<h2 class="voice-card__heading-tag">' . esc_html($term->name) . '</h2>';
                      }
                    }
                    ?>
                  </div>
                  <h3 class="voice-card__heading-title"><?php the_title(); ?></h3>
                </div>

                <div class="voice-card__heading-img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_content(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_content(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </div>
              </div>
              <p class="voice-card__text"><?php the_content(); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
    </div>

  <?php else : ?>
    <p>記事が投稿されていません</p>
  <?php endif; ?>

  <div class="page-voice__pagenavi page-pagenavi">
    <div class="page-pagenavi__inner">
      <!-- WP-PageNaviで出力される部分 ここから -->
      <?php wp_pagenavi(); ?>
      <!-- WP-PageNaviで出力される部分 ここまで -->
    </div>
  </div>
  </div>
  </div>
</section>
<?php get_footer(); ?>