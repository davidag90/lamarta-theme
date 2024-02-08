<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

// Restaura la funcionalidad de widgets clásicos y desactiva el widget-block-editor
function restore_classic_widgets() {
  remove_theme_support( 'widgets-block-editor' ); // Restaura widgets clásicos
}

add_action( 'after_setup_theme', 'restore_classic_widgets' );


// Filtrar las clases del elemento li
function top_footer_menu_li_classes($classes, $item, $args, $depth) {
  $classes[] = 'nav-item';

  return $classes;
}

// Filtra clases de los <a> internos
function top_footer_menu_link_attributes($atts, $item, $args, $depth) {
  $atts['class'] .= ' nav-link link-light';
  
  return $atts;
}

// Filtrar las opciones del menú dentro de un widget
function top_footer_menu_args($nav_menu_args, $nav_menu, $args, $instance) {
  // Verificar si el widget es el que deseas
  if ($args['widget_id'] === 'nav_menu-2') {
      // Agregar clases al elemento ul
      $nav_menu_args['menu_class'] .= ' nav';

      // Agregar clases al elemento li
      add_filter('nav_menu_css_class', 'top_footer_menu_li_classes', 10, 4);
      add_filter('nav_menu_link_attributes', 'top_footer_menu_link_attributes', 10, 4);
  }

  return $nav_menu_args;
}

add_filter('widget_nav_menu_args', 'top_footer_menu_args', 10, 4);



function top_footer_widget_classes($params) {
  // Verificar si es la zona para widgets específica
  if ($params[0]['id'] === 'top-footer') {
      // Realizar las modificaciones necesarias en las clases de la zona
      // Por ejemplo, puedes modificar las clases de la zona aquí
      $params[0]['before_widget'] = preg_replace('/class="(.*?)mb-5(.*?)"/', 'class="$1$2"', $params[0]['before_widget']);
  }

  return $params;
}

add_filter('dynamic_sidebar_params', 'top_footer_widget_classes');

// Agregar page-slug a la función body_class()
function add_slug_body_class( $classes ) {
  global $post;
  
  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  
  return $classes;
}

add_filter( 'body_class', 'page_slug_body_class' );