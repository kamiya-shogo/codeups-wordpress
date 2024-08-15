<?php get_header(); ?>
<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>



    <section class="single-blog layout-page-margin">
      <div class="single-blog__inner inner page-body-icon">
        <div class="page-blog-wrap">
          <div class="page-blog-wrap__main single-blog-content">
            <div class="single-blog-content__meta">
              <time class="single-blog-content__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>

            </div>
            <h2 class="single-blog-content__title"><?php the_title(); ?></h2>
            <div class="single-blog-content__content">
              <figure class="single-blog-content__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-img1.jpg" alt="海の中にピンク色のサンゴ礁が写っている様子">
              </figure>
              <p><?php the_content(); ?></p>
              <figure>
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_content(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="<?php the_content(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </figure>
              <p>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
              <ul>
                <li>リスト1</li>
                <li>リスト2</li>
                <li>リスト3</li>
              </ul>
              <p>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>

            <div class="single-blog-content__pagenavi">
              <div class="single-blog-content__inner">
                <div class='single-blog-content__prev-next'>
                  <?php
                  $prev = get_previous_post();
                  $prev_url = esc_url(get_permalink($prev->ID));
                  $next = get_next_post();
                  $next_url = esc_url(get_permalink($next->ID));
                  ?>

                  <?php if (!empty($prev)) : ?>
                    <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
                  <?php endif; ?>

                  <?php if (!empty($next)) : ?>
                    <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>"></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>

          <div class="page-blog-wrap__sidebar">
            <?php get_template_part('parts/sidebar'); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>

<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>