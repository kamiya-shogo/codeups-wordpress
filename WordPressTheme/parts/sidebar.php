<aside class="page-sidebar">
  <ul class="page-sidebar__list">
    <li class="page-sidebar__item">
      <h2 class="page-sidebar__title page-sidebar-title">人気記事</h2>
      <?php
      $args = [
        "post_type" => "post",
        "posts_per_page" => 3,
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-sidebar__popular-blog-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-sidebar__popular-blog-item">
              <article class="page-sidebar__popular-blog">
                <a class="page-sidebar__popular-blog-link" href="<?php the_permalink(); ?>">
                  <div class="page-sidebar__popular-blog-img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php endif; ?>
                  </div>
                  <div class="page-sidebar__popular-blog-wrap">
                    <time class="page-sidebar__popular-blog-date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
                    <h3 class="page-sidebar__popular-blog-title"><?php the_title(); ?></h3>
                  </div>
                </a>
              </article>
            </li>

          <?php endwhile; ?>
        <?php else : ?>
          <!-- ここに投稿がない場合の記述 -->
          <p>記事が投稿されていません</p>
        <?php endif;
      wp_reset_postdata(); ?>
        </ul>
    </li>
    <li class="page-sidebar__item">
      <h2 class="page-sidebar__title page-sidebar-title">口コミ</h2>
      <?php
      $args = [
        "post_type" => "voice",
        "posts_per_page" => 1,
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-sidebar__voice-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-sidebar__voice-item">
              <div class="page-sidebar__voice-img">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </div>
              <p class="page-sidebar__voice-age"><?php the_field('voice_1'); ?></p>
              <p class="page-sidebar__voice-title"><?php the_title(); ?></p>
              <div class="page-sidebar__voice-btn btn-center">
                <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button button--viewmore"><span>View more</span></a>
              </div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <!-- ここに投稿がない場合の記述 -->
          <p>記事が投稿されていません</p>
        <?php endif;
      wp_reset_postdata(); ?>
        </ul>
    </li>
    <li class="page-sidebar__item">
      <h2 class="page-sidebar__title page-sidebar-title">キャンペーン</h2>

      <?php
      $args = [
        "post_type" => "campaign",
        "posts_per_page" => 2,
      ];
      $the_query = new WP_Query($args);
      ?>


      <?php if ($the_query->have_posts()) : ?>
        <ul class="page-sidebar__campaign-list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="page-sidebar__campaign-card campaign-card">
              <div class="campaign-card__img campaign-card__img--aspect-ratio">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </div>
              <div class="campaign-card__content campaign-card__content--sidebar">
                <p class="campaign-card__title campaign-card__title--center"><?php the_title(); ?></p>
                <p class="campaign-card__text campaign-card__text--fz campaign-card__text--sidebar">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--flex-end">
                  <p class="campaign-card__price-before campaign-card__price-before--fz"><?php the_field('campaign_1'); ?></p>
                  <p class="campaign-card__price-after campaign-card__price-after--fz"><?php the_field('campaign_2'); ?></p>
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
        <div class="page-sidebar__campaign-btn btn-center">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button button--viewmore"><span>View more</span></a>
        </div>
    </li>
    <li class="page-sidebar__item">
      <h2 class="page-sidebar__title page-sidebar-title">アーカイブ</h2>
      <div class="page-sidebar__archive-list">
        <div class="page-sidebar__archive-item">
          <ul class="page-sidebar__archive-date-wrap js-toggle">
            <div class="page-sidebar__archive-list">
              <?php
              $current_year = date('Y');
              $years = range($current_year, $current_year - 2); // 過去3年分

              foreach ($years as $year) {
                $isOpen = ($year == $current_year) ? 'is-open' : '';
                $displayStyle = ($year == $current_year) ? '' : 'display:none;';
                echo '<div class="page-sidebar__archive-item">';
                echo '<p class="page-sidebar__archive-year js-page-sidebar-archive ' . $isOpen . '">' . $year . '年</p>';
                echo '<ul class="page-sidebar__archive-date-wrap js-toggle" style="' . $displayStyle . '">';

                // カスタムクエリでその年の投稿がある月を取得
                $months = get_posts([
                  'year' => $year,
                  'posts_per_page' => -1,
                  'fields' => 'date'
                ]);

                $unique_months = [];
                foreach ($months as $post) {
                  $month = date('n', strtotime($post->post_date)); // 月を取得
                  if (!in_array($month, $unique_months)) {
                    $unique_months[] = $month;
                  }
                }

                foreach ($unique_months as $month) {
                  echo '<li><a href="?year=' . $year . '&month=' . $month . '">' . $month . '月</a></li>';
                }

                echo '</ul>';
                echo '</div>';
              }
              ?>
            </div>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</aside>