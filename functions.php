<?php

/**
 * ──────────────────────────────────────────────────────────────────────────────
 *  Contact Form 7 が自動で <p> や <br> を挿入する機能を無効化
 * ──────────────────────────────────────────────────────────────────────────────
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop_return_false');
function my_wpcf7_autop_return_false()
{
  return false;
}

/**
 * ──────────────────────────────────────────────────────────────────────────────
 *  各種ライブラリ（Lottie / GSAP / ScrollTrigger）と main.js を
 *  フッターで読み込むためのスクリプト設定
 * ──────────────────────────────────────────────────────────────────────────────
 */
function theme_enqueue_scripts()
{
  // wp_enqueue_script(
  //   'lottie-web',
  //   'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.14/lottie.min.js',
  //   array(),
  //   '5.7.14',
  //   true
  // );

  wp_enqueue_script(
    'gsap',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
    array(),
    '3.12.5',
    true
  );

  wp_enqueue_script(
    'scrolltrigger',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
    array('gsap'),
    '3.12.5',
    true
  );

  wp_enqueue_script(
    'theme-main',
    get_template_directory_uri() . '/src/js/main.js',
    array(),
    filemtime(get_template_directory() . '/src/js/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

add_filter('script_loader_tag', function ($tag, $handle) {
  if ($handle === 'theme-main') {
    return str_replace('<script ', '<script type="module" ', $tag);
  }
  return $tag;
}, 10, 2);


/**
 * クライアント用：管理画面メニューを非表示（編集者向け）
 * 対象：editor（編集者）
 */
add_action('admin_menu', function () {
  // 管理者は対象外
  if (current_user_can('administrator')) {
    return;
  }

  // 編集者だけに適用
  if (!current_user_can('editor')) {
    return;
  }

  // Contact Form 7
  remove_menu_page('wpcf7');

  // プロフィール
  remove_menu_page('profile.php');

  // ツール
  remove_menu_page('tools.php');

  // Yoast SEO
  remove_menu_page('wpseo_dashboard');
  remove_menu_page('wpseo_workouts');
  remove_menu_page('wpseo_redirects'); // Premium等で出ることがある
}, 999);
