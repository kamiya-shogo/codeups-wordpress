<?php get_header(); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb', null, array('class' => 'breadcrumb__inner--white')); ?>

<div class="page-404">
  <div class="page-404__inner inner">
    <div class="page-404__body">
      <h1 class="page-404__title">404</h1>
      <p class="page-404__text">申し訳ありません。<br>
        お探しのページが見つかりません。</p>
      <div class="page-404__btn btn-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--white button--pagetop">page <span>top</span></a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>