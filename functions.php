<?php

add_theme_support('title-tag');

add_post_type_support('page', 'excerpt');

register_nav_menu('main-menu','Main Menu');

// custom post
register_post_type('item', [
  'labels' => [
    'name' => '商品',
    'singular_name' => '商品',
    'add_new_item' => '商品を追加',
    'search_items' => '商品を探す',
    'not_found' => '商品が見つかりません',
  ],
  'public' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'supports' => [
    'title',
    'editor',
    'page-attributes',
  ],
  'menu-position' => 0,
  'menu_icon' => 'dashicons-screenoptions'
]);

// excerpt length and end
function my_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

// archive page number
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( $query->is_archive() ) {
        $query->set( 'posts_per_page', '4' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

// shortcode - img PATH
add_shortcode('img', 'img_func');
function img_func() {
  return get_template_directory_uri().'/images/';
}
