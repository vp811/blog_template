<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
/*----first header widget---*/
    register_sidebar( array(
        'name'          => ('First Header Widget'),
        'id'            => 'header-one',
        'description'   => 'Left widget in the Header',
        'before_widget' => '<div class="widget-header widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

/*----second header widget---*/
    register_sidebar( array(
        'name'          => ('Second Header Widget'),
        'id'            => 'header-two',
        'description'   => 'Right social media widget in the Header',
        'before_widget' => '<div class="widget-header widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

/*----first sidebar widget---*/
        register_sidebar( array(
            'name'          => ('First sidebar Widget'),
            'id'            => 'sidebar-one',
            'description'   => 'First sidebar widget in sidebar',
            'before_widget' => '<div class="widget-sidebar widget-top">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
        ));

/*----second sidebar widget---*/
    register_sidebar( array(
        'name'          => ('Second sidebar Widget'),
        'id'            => 'sidebar-two',
        'description'   => 'Second sidebar widget in sidebar',
        'before_widget' => '<div class="widget-sidebar widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ));

/*----third sidebar widget---*/
    register_sidebar( array(
        'name'          => ('Third sidebar Widget'),
        'id'            => 'sidebar-three',
        'description'   => 'Third sidebar widget in sidebar',
        'before_widget' => '<div class="widget-sidebar widget-bottom">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ));

/*----first footer widget---*/
register_sidebar( array(
    'name'          => ('First Footer Widget'),
    'id'            => 'footer-one',
    'description'   => 'Left Widget in the footer',
    'before_widget' => '<div class="widget-footer footer-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----third footer widget---*/
register_sidebar( array(
    'name'          => ('Third Footer Widget'),
    'id'            => 'footer-two',
    'description'   => 'Right Widget in the footer',
    'before_widget' => '<div class="widget-footer footer-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );









?>
