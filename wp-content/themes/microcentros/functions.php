<?php

// HOLI.

// Walker para Bootstrap 3, disponible en https://github.com/twittem/wp-bootstrap-navwalker/
require_once('wp_bootstrap_navwalker.php');

// Registra el menú e incluye el uso del Walker.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Registra tamaños personalizados para imagen destacada

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( '4-columnas', 390, 300, true  ); //300 pixels wide (and unlimited height)
add_image_size( '6-columnas', 585, 300, true  ); //300 pixels wide (and unlimited height)
add_image_size( '8-columnas', 780, 300, true  ); //300 pixels wide (and unlimited height)
add_image_size( '12-columnas', 1170, 300, true  ); //300 pixels wide (and unlimited height)
add_image_size( 'completa', 2000, 500, true  ); //300 pixels wide (and unlimited height)

}

// Título para portada

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Portada' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}

// Registro de barras laterales

// Registra sidebars
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Barra de noticias', 'RD'),
        'description' => __('Barra que muestra widgets en las páginas de noticias.', 'RD'),
        'id' => 'sidebar-noticias',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="titulodewidget">',
        'after_title' => '</div>'
    ));

    // Define Sidebar Widget Area 2
/*    register_sidebar(array(
        'name' => __('Barra de grabado', 'CO'),
        'description' => __('Barra que muestra widgets en la página de grabado', 'CO'),
        'id' => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 style="text-transform:uppercase;">',
        'after_title' => '</h4>'
    )); */

}


?>