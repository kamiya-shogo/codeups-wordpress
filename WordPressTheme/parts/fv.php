<?php
$page = get_post_field('post_name', get_post());

if (is_page('campaign') || is_post_type_archive('campaign') || is_tax('campaign_category')) {
    $image_pc = '/assets/images/campaign/page-campaign-mv.jpg';
    $image_sp = '/assets/images/campaign/page-campaign-sp-mv.jpg';
    $alt = '透き通る海の中を小さな魚の群れが泳いている様子';
    $title = 'campaign';
} elseif ($page === 'about') {
    $image_pc = '/assets/images/about/page-about-mv.jpg';
    $image_sp = '/assets/images/about/page-about-sp-mv.jpg';
    $alt = '青い空とシーサーの写真';
    $title = 'about us';
} elseif ($page === 'information') {
    $image_pc = '/assets/images/information/page-information-mv.jpg';
    $image_sp = '/assets/images/information/page-information-sp-mv.jpg';
    $alt = '海の中の大きなの岩の側で小さな黄色な魚の群れと人が泳いでいる様子';
    $title = 'information';
} elseif (is_page('blog') || is_post_type_archive('blog') || is_single()) {
    $image_pc = '/assets/images/blog/page-blog-mv.jpg';
    $image_sp = '/assets/images/blog/page-blog-sp-mv.jpg';
    $alt = '透き通る海の中を小さな魚の群れが泳いている様子';
    $title = 'blog';
} elseif (is_page('voice') || is_post_type_archive('voice') || is_tax('voice_category')) {
    $image_pc = '/assets/images/voice/page-voice-mv.jpg';
    $image_sp = '/assets/images/voice/page-voice-sp-mv.jpg';
    $alt = '透き通った海をダイビングしている人たちが海に浮かんでいる様子の上からの写真';
    $title = 'voice';
} elseif ($page === 'price') {
    $image_pc = '/assets/images/price/page-price-mv.jpg';
    $image_sp = '/assets/images/price/page-price-sp-mv.jpg';
    $alt = 'ダイビングをしている人が海から頭を出している様子';
    $title = 'price';
} elseif ($page === 'faq') {
    $image_pc = '/assets/images/faq/page-faq-mv.jpg';
    $image_sp = '/assets/images/faq/page-faq-sp-mv.jpg';
    $alt = '青空と綺麗な海の砂浜に人がいる様子';
    $title = 'faq';
} elseif ($page === 'contact' || $page === 'confirm' || $page === 'complete') {
    $image_pc = '/assets/images/contact/page-contact-mv.jpg';
    $image_sp = '/assets/images/contact/page-contact-sp-mv.jpg';
    $alt = '波打ち際の上空からの様子';
    $title = 'contact';
} elseif ($page === 'sitemap') {
    $image_pc = '/assets/images/page/page-terms-privacy-mv.jpg';
    $image_sp = '/assets/images/page/page-terms-privacy-sp-mv.jpg';
    $alt = '緑色のイソギンチャクのそばで小さな最中の群れが泳いでおり、陽の光が差し込んでいる様子';
    $title = 'site map';
} elseif ($page === 'privacypolicy') {
    $image_pc = '/assets/images/page/page-terms-privacy-mv.jpg';
    $image_sp = '/assets/images/page/page-terms-privacy-sp-mv.jpg';
    $alt = '緑色のイソギンチャクのそばで小さな最中の群れが泳いでおり、陽の光が差し込んでいる様子';
    $title = 'privacy policy';
} elseif ($page === 'terms-of-service') {
    $image_pc = '/assets/images/page/page-terms-privacy-mv.jpg';
    $image_sp = '/assets/images/page/page-terms-privacy-sp-mv.jpg';
    $alt = '緑色のイソギンチャクのそばで小さな最中の群れが泳いでおり、陽の光が差し込んでいる様子';
    $title = 'terms of service';
} else {
    $image_pc = '/assets/images/common/top-mv-img1.jpg';
    $image_sp = '/assets/images/common/top-mv-sp-img1.jpg';
    $alt = '背景画像とタイトルが設定されていません';
    $title = "背景画像とタイトルが\n設定されていません";
}
?>

<div class="page-mv js-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri() . $image_pc); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri() . $image_sp); ?>" alt="<?php echo esc_attr($alt); ?>">
            </picture>
        </div>
        <div class="page-mv__content">
            <?php if ($page === 'faq'): ?>
                <h1 class="page-mv__title page-mv__title--capitalize"><?php echo esc_html($title); ?></h1>
            <?php else: ?>
                <h1 class="page-mv__title"><?php echo nl2br(esc_html($title)); ?></h1>
            <?php endif; ?>
        </div>
    </div>
</div>