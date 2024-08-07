<?php

function add_custom_scripts()
{
    // Google Fontsの追加
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;600;700;800&family=Noto+Serif+JP:wght@300;400;500;600;700&display=swap', false);

    // swiperのCSSの追加
    wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0', false);

    // テーマのCSSの追加
    wp_enqueue_style('theme-styles', get_theme_file_uri('assets/css/style.css'), false);

    // jQueryの追加
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);

    // swiperのJSの追加
    wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'), '9.0.0', true);

    // inviewのJSの追加
    wp_enqueue_script('inview-scripts', get_theme_file_uri('assets/js/jquery.inview.min.js'), array('jquery'), '1.0.0', true);

    // テーマのJSの追加
    wp_enqueue_script('theme-scripts', get_theme_file_uri('assets/js/script.js'), array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'add_custom_scripts');

// crossorigin属性を持つタグに対する対応
function add_rel_preconnect($html, $handle, $href, $media)
{
    if ('google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle) {
        $html = <<<EOT
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        $html
        EOT;
    }
    return $html;
}

add_filter('style_loader_tag', 'add_rel_preconnect', 10, 4);

function my_setup()
{
    add_theme_support('post-thumbnails'); /* アイキャッチ */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support(
        'html5',
        array(
            /* HTML5のタグで出力 */
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

add_action('pre_get_posts', 'change_posts_per_page');

//アーカイブの表示件数変更
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_archive('campaign')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '4'); //表示件数を指定
    }
    if ($query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', '6'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

SCF::add_options_page(
	'ギャラリー',
	'ギャラリーの画像',
	'manage_options',
	'theme-gallery',
	'dashicons-format-gallery',
	7
);

SCF::add_options_page(
	'料金一覧',
	'料金一覧',
	'manage_options',
	'theme-price',
	'dashicons-format-price',
	7
);

SCF::add_options_page(
	'よくある質問',
	'よくある質問',
	'manage_options',
	'theme-faq',
	'dashicons-format-faq',
	7
);