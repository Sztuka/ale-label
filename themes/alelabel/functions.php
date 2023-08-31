<?php

function ale_label_files() {
  wp_enqueue_script('alelabel-bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.js'), array(), '5.3.1', true);
  wp_enqueue_script('alelabel-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts-1', '//fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
  wp_enqueue_style('alelabel-bootstrap', get_theme_file_uri('/assets/css/bootstrap.css'));
  wp_enqueue_style('alelabel-index', get_theme_file_uri('/assets/css/index.css'));
  wp_enqueue_style('alelabel-main', get_theme_file_uri('/assets/css/main.css'));
}

add_action( 'wp_enqueue_scripts', 'ale_label_files');


function ale_label_features() {
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('footerLocationOne', 'Footer Location One');
  // register_nav_menu('footerLocationTwo', 'Footer Location Two');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ale_label_features');
