<?php
// TOPページに top-page クラスを追加（ヘッダー・FVスタイル適用用）
function mdt_body_class_top_page($classes) {
    if (is_front_page()) {
        $classes[] = 'top-page';
    }
    return $classes;
}
add_filter('body_class', 'mdt_body_class_top_page');

function mdt_enqueue_assets() {
    $uri = get_template_directory_uri();
    $ver = '1.0.1'; // キャッシュ対策：更新時にバージョンアップ

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Lato:wght@300;400;700&family=Noto+Sans+JP:wght@400;500&family=Quicksand:wght@500;700&display=swap',
        array(),
        null
    );

    // Common CSS (all pages)
    wp_enqueue_style('mdt-common', $uri . '/assets/css/common.css', array(), $ver);

    // Page-specific CSS
    if (is_front_page()) {
        wp_enqueue_style('mdt-style', $uri . '/assets/css/style.css', array('mdt-common'), $ver);
        wp_enqueue_script('mdt-slider', $uri . '/assets/js/slider.js', array(), $ver, true);
    }

    $course_templates = array('page-basic', 'page-advance', 'page-event');
    foreach ($course_templates as $tpl) {
        if (is_page_template($tpl . '.php')) {
            wp_enqueue_style('mdt-course', $uri . '/assets/css/course.css', array('mdt-common'), $ver);
            break;
        }
    }

    if (is_page_template('page-summary.php')) {
        // summary uses inline styles; common.css is sufficient
    }

    // Main JS (all pages)
    wp_enqueue_script('mdt-main', $uri . '/assets/js/main.js', array(), '1.0.0', true);

    // Summary JS
    if (is_page_template('page-summary.php')) {
        wp_enqueue_script('mdt-summary', $uri . '/assets/js/summary.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'mdt_enqueue_assets');

// Facebook埋め込みはiframeで直接表示（SDK不要・エラー回避）

// Support wp_body_open for older themes
if (!function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
}
