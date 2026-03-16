<?php
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'post';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'news',
    array(
      'labels' => array('name' => '譁ｰ逹諠・ｱ'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 100,
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
  register_taxonomy(
    'news_category',
    'post',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => '繧ｫ繝・ざ繝ｪ繝ｼ',
      'public' => true,
      'show_ui' => true,
    )
  );
}
//險倅ｺ九・URL繧呈焚蟄励↓縺吶ｋ
function news_post_type_link($link, $post)
{
  if ($post->post_type === 'post') {
    return home_url('/post/' . $post->ID);
  } else {
    return $link;
  }
}
add_filter('post_type_link', 'post_post_type_link', 1, 2);

function post_rewrite_rules_array($rules)
{
  $new_rewrite_rules = array(
    'post/([0-9]+)/?$' => 'index.php?post_type=post&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'post_rewrite_rules_array');

function my_theme_enqueue_scripts()
{
  wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/dist/main/js/bundle.js', array(), null, true);
  wp_localize_script('my-theme-script', 'themeData', array(
    'themeUrl' => get_template_directory_uri(),
  ));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


/* ------------------------------
邂｡逅・・ｻ･螟悶〒縺ｯ陦ｨ遉ｺ縺吶ｋ繧ｵ繧､繝峨Γ繝九Η繝ｼ繧貞宛髯・------------------------------ */
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
  global $menu;
  if (!current_user_can('level_10')) {
    unset($menu[5]);  // 謚慕ｨｿ
    unset($menu[20]); // 繝壹・繧ｸ
    unset($menu[25]); // 繧ｳ繝｡繝ｳ繝・
    unset($menu[65]); // 繝励Λ繧ｰ繧､繝ｳ
    unset($menu[70]); // 繝励Ο繝輔ぅ繝ｼ繝ｫ
    unset($menu[75]); // 繝・・繝ｫ
  }
}
/* ------------------------------
繝輔ャ繧ｿ繝ｼ驛ｨ蛻・・繝・く繧ｹ繝医ｒ螟画峩
------------------------------ */
add_filter('admin_footer_text', 'mse_admin_footer_text');
function mse_admin_footer_text()
{
  echo '';
}
/* ==================================================
笆 繝ｭ繧ｰ繧､繝ｳ逕ｻ髱｢
================================================== */
/* ------------------------------
繝ｭ繧ｴ縺ｮ繝ｪ繝ｳ繧ｯ蜈・RL繧貞､画峩
------------------------------ */
add_filter('login_headerurl', 'my_login_headerurl');
function my_login_headerurl()
{
  return '';
}
add_filter('allow_major_auto_core_updates', '__return_true');


/*
 * 繧ｿ繧､繝医Ν縺ｮ蛹ｺ蛻・ｊ邱壹ｒ | 縺ｫ縺吶ｋ
 */
function nendebcom_title_separator($sep)
{
  $sep = '|';
  return $sep;
}
add_filter('document_title_separator', 'nendebcom_title_separator');

/*
 * og:tyle繧貞虚逧・↓險倩ｿｰ
 */
function og_type()
{
  if (is_page()) {
    echo "website";
  } elseif (is_archive() || is_single()) {
    echo "article";
  }
}

/*
 * ?author=X 繧堤┌蜉ｹ蛹・ */
function disable_author_archive_query()
{
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) && !preg_match('/post_author=/i', $_SERVER['QUERY_STRING'])) {
    wp_redirect(home_url());
    exit;
  }
}
add_action('init', 'disable_author_archive_query');


