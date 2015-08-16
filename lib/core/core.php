<?php
/**
 * theme core file - set up and load all theme settings
 * @package Wordpress
 * @subpackage basik
 * @since 1.0
 * @author Matthew Hansen
 */


add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support('nav-menus');

define( 'TPATH', blog_info( 'stylesheet_directory' ) );
define( 'IMAGES', TPATH . 'images' );


if( function_exists( 'register_nav_menus' ) ) :
  register_nav_menus( array( 'main' => 'Main Menu' ) );
endif;

if( function_exists( 'register_sidebar' ) ) :
  register_sidebar( array (
		'name' => __('Sidebar', 'sidebar'),
		'id' => 'sidebar',
		'description' => __('Sidebar', 'dir'),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>'
	   )
   );
endif;
