<?php get_header(); ?>
<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-campaign layout-page-margin">
  <div class="page-campaign__inner inner page-body-icon">
    <div class="page-campaign__category">
      <ul class="page-campaign__category-menu">
        <?php
        $terms = get_terms([
          'taxonomy' => 'campaign_category',
          'hide_empty' => false,
          'orderby' => 'name',
          'order' => 'ASC',
        ]);
        // タームが存在し、エラーでない場合にタブを表示
        if (!empty($terms) && !is_wp_error($terms)) {
          // 全ての投稿を表示するタブ
          echo '<li class="page-campaign__category-item"><a href="' . esc_url(get_post_type_archive_link('campaign')) . '" class="' . (is_post_type_archive('campaign') ? 'is-active' : '') . '">all</a></li>';
          // 各タームのタブを生成
          foreach ($terms as $term) {
            echo '<li class="page-campaign__category-item"><a href="' . esc_url(get_term_link($term)) . '" class="' . (is_tax('campaign_category', $term->slug) ? 'is-active' : '') . '">' . esc_html($term->name) . '</a></li>';
          }
        }
        ?>
      </ul>

      <?php
      $genre_slug = get_query_var('campaign_category');
      $args = [
        "post_type" => "campaign",
        'tax_query' => [
          [
            'taxonomy' => 'campaign_category',
            'field'    => 'slug',
            'terms'    => $genre_slug,
          ],
        ],
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-campaign__cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-campaign__card campaign-card">
              <div class="campaign-card__img">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_content(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_content(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </div>
              <div class="campaign-card__content campaign-card__content--page">

                <?php
                $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                if (!empty($taxonomy_terms)) {
                  foreach ($taxonomy_terms as $taxonomy_term) {
                    echo '<h3 class="campaign-card__tag">' . esc_html($taxonomy_term->name) . '</h3>';
                  }
                }
                ?>

                <h2 class="campaign-card__title campaign-card__title--page"><?php the_title(); ?></h2>
                <p class="campaign-card__text campaign-card__text--page">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
                  <p class="campaign-card__price-after campaign-card__price-after--page"><?php the_field('campaign_2'); ?></p>
                </div>
                <div class="campaign-card__body u-desktop">
                  <p class="campaign-card__body-text"><?php the_content(); ?></p>
                  <p class="campaign-card__body-time campaign-card__body-time--page">
                    <time datetime="2023-06-01">2023/6/1</time>
                    -
                    <time datetime="2023-09-30">9/30</time>
                  </p>
                  <p class="campaign-card__body-contact campaign-card__body-contact--page">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__body-btn campaign-card__body-btn--page btn-center">
                    <a href="contact.html" class="button button--contactus"><span>Contact us</span></a>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

      <?php else : ?>
        <p>記事が投稿されていません</p>
      <?php endif; ?>
    </div>

    <div class="page-campaign__pagenavi page-pagenavi">
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