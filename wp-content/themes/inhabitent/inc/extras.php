<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_custom_login_logo() {
  echo '<style type="text/css">                                                                   
     h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important;
            background-size: 300px 53px !important;
            width: 300px !important;
            height: 53px !important;
          }                            
   </style>';
}
add_action('login_head', 'my_custom_login_logo');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widget_init() {

  register_sidebar( array(
    'name'          => 'Footer Widget Area',
    'id'            => 'footer',/*
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',*/
  ) );

}
add_action( 'widgets_init', 'footer_widget_init' );