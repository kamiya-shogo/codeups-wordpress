<?php get_header(); ?>
<!-- メインビュー -->
<div class="page-mv js-page-mv">
  <div class="page-mv__inner">
    <div class="page-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog/page-blog-mv.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/page-blog-sp-mv.jpg" alt="透き通る海の中を小さな魚の群れが泳いている様子">
      </picture>
    </div>
    <div class="page-mv__content">
      <h1 class="page-mv__title">blog</h1>
    </div>
  </div>
</div>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>


<section class="archive-blog layout-page-margin">
  <div class="archive-blog__inner inner page-body-icon">
    <div class="page-blog-wrap">
      <div class="page-blog-wrap__main">
        <?php
        // URLから年と月を取得し、クエリを変更する
        if (isset($_GET['year']) && isset($_GET['month'])) {
          $year = intval($_GET['year']);
          $month = intval($_GET['month']);
          $query_args = array(
            'year' => $year,
            'monthnum' => $month,
            'post_type' => 'post'
          );
          query_posts($query_args);
        }
        ?>


        <?php if (have_posts()) : ?>
          <div class="page-blog-wrap__cards blog-cards-list blog-cards-list--archive-grid">

            <?php while (have_posts()) : the_post(); ?>
              <article class="blog-cards-list__item blog-card blog-card--page">
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
                    <h2 class="blog-card__title"><?php the_title(); ?></h2>
                    <p class="blog-card__text  text"><?php the_content(); ?></p> <!-- the_excerptで抜粋するのがいい -->
                  </div>
                </a>
              </article>

            <?php endwhile; ?>
          </div>

        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>

        <div class="page-blog-wrap__pagenavi page-pagenavi">
          <div class="page-pagenavi__inner">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <?php wp_pagenavi(); ?>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>
      </div>

      <div class="page-blog-wrap__sidebar">
        <?php get_template_part('parts/sidebar'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>