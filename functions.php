<?php
function strategy_assets()
{
  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
  wp_enqueue_style('choicescss', get_template_directory_uri() . '/assets/css/choices.min.css');
  wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_script('choicesjs', get_template_directory_uri() . '/assets/js/choices.min.js', array(), '20151215', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'strategy_assets');

// Отключение админ-бара
add_action('after_setup_theme', function () {
  show_admin_bar(false);
});

// Поддержка миниатюр, заголовков и логотипов
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Добавление favicon
function add_favicon()
{
  $favicon_url = get_template_directory_uri() . '/assets/image/lr-icon.jpg';
  echo '<link rel="shortcut icon" href="' . esc_url($favicon_url) . '" />';
}
add_action('wp_head', 'add_favicon');

add_filter('wpcf7_form_elements', function ($content) {
  // Удаление открывающих и закрывающих тегов <p> вокруг формы
  $content = preg_replace('/<p[^>]*>/', '', $content); // Удаление открывающих тегов <p>
  $content = preg_replace('/<\/p>/', '', $content); // Удаление закрывающих тегов </p>
  return $content;
});
