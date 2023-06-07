<?php

add_theme_support('post-thumbnails');

function titles() {

  if (is_home()) {
    echo get_bloginfo( 'name' );
  } else {
    echo get_the_title() . ' | ' . get_bloginfo( 'name' );
  }
}

function my_theme_enqueue_scripts() {
  if ( is_page('shops') ) {
      // "shops"ページのときだけスクリプトを読み込む
      wp_enqueue_script('shops-script', get_template_directory_uri() . '/assets/javascript/shops.js', array(), '1.0.0', true);
  }
  if ( is_page('qa') ) {
    wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/qa.css', array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');