<?php
if (is_page('campaign')) {
    $image_pc = '/assets/images/campaign/page-campaign-mv.jpg';
    $image_sp = '/assets/images/campaign/page-campaign-sp-mv.jpg';
    $alt = '透き通る海の中を小さな魚の群れが泳いている様子';
    $title = 'campaign';
} 
elseif (is_page('service')) {
    $image = '/wp-content/themes/wp-demo/images/service-fv.jpg';
    $title = 'サービス紹介';
} 
elseif (is_page('service')) {
    $image = '/wp-content/themes/wp-demo/images/service-fv.jpg';
    $title = 'サービス紹介';
} 
elseif (is_page('service')) {
    $image = '/wp-content/themes/wp-demo/images/service-fv.jpg';
    $title = 'サービス紹介';
} 
elseif (is_page('service')) {
    $image = '/wp-content/themes/wp-demo/images/service-fv.jpg';
    $title = 'サービス紹介';
} 
elseif (is_page('service')) {
    $image = '/wp-content/themes/wp-demo/images/service-fv.jpg';
    $title = 'サービス紹介';
} 
else {
    $image = '/wp-content/themes/wp-demo/images/default-fv.jpg';
    $title = '背景画像とタイトルが設定されていません';
}
?>

<div class="page-mv js-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>$image_pc" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>$image_sp" alt="<?php echo $alt; ?>">
            </picture>
        </div>
        <div class="page-mv__content">
            <h1 class="page-mv__title"><?php echo $title; ?></h1>
        </div>
    </div>
</div>