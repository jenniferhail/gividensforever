<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with even simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

// Only the bare minimum to get the theme up and running
function thegividens_setup() {

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  $content_width = 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'thegividens' ) );
  register_nav_menu( 'mobile', __( 'Mobile menu', 'thegividens' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'thegividens' ) );

}
add_action( 'after_setup_theme', 'thegividens_setup', 11 );

// Sidebar declaration
function thegividens_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Main sidebar', 'thegividens' ),
    'id'            => 'sidebar-main',
    'description'   => __( 'Appears to the right side of most posts and pages.', 'thegividens' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'thegividens_widgets_init' );

function thegividens_theme_customizer( $wp_customize ) {
 
  // Header color
   $wp_customize->add_setting( 'header_textcolor' , array(
      'default'     => '#000000',
      'transport'   => 'refresh',
  ) );
  $wp_customize->add_section( 'thegividens_header' , array(
      'title'      => __( 'Header', 'thegividens' ),
      'priority'   => 30,
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label'        => __( 'Header Color', 'thegividens' ),
    'section'    => 'thegividens_header',
    'settings'   => 'header_textcolor',
  ) ) );

  // Logo
  $wp_customize->add_section( 'thegividens_logo_section' , array(
      'title'       => __( 'Logo', 'thegividens' ),
      'priority'    => 30,
      'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );
  $wp_customize->add_setting( 'thegividens_logo_a', array(
      'sanitze_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'thegividens_logo_a', array(
      'label'     => __( 'Logo A', 'thegividens'),
      'section'   => 'thegividens_logo_section',
      'settings'  => 'thegividens_logo_a',
  ) ) );
  $wp_customize->add_setting( 'thegividens_logo_b', array(
      'sanitze_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'thegividens_logo_b', array(
      'label'     => __( 'Logo B', 'thegividens'),
      'section'   => 'thegividens_logo_section',
      'settings'  => 'thegividens_logo_b',
  ) ) );

  // Home Background
  $wp_customize->add_section( 'thegividens_background_section' , array(
      'title'       => __( 'Background', 'thegividens' ),
      'priority'    => 30,
      'description' => 'Upload a background for the home page',
  ) );
  $wp_customize->add_setting( 'thegividens_background', array(
      'sanitze_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'thegividens_background', array(
      'label'     => __( 'Background', 'thegividens'),
      'section'   => 'thegividens_background_section',
      'settings'  => 'thegividens_background',
  ) ) );
  $wp_customize->add_setting( 'thegividens_smallbackground', array(
      'sanitze_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'thegividens_smallbackground', array(
      'label'     => __( 'Small Background', 'thegividens'),
      'section'   => 'thegividens_background_section',
      'settings'  => 'thegividens_smallbackground',
  ) ) );

}
add_action( 'customize_register', 'thegividens_theme_customizer' );

function thegividens_customize_css()
{
    ?>
         <style type="text/css">
            
             h1 { color: <?php echo get_theme_mod('header_textcolor', '#000000'); ?>; }

             #site-logo {
              background-image: url('<?php echo get_theme_mod('thegividens_logo_a'); ?>');
              background-size: 60px 243px;
              transition: background-image 0.5s ease-in-out;
              width: 60px;
              height: 243px;
             }
             #site-logo:hover {
              background-image: url('<?php echo get_theme_mod('thegividens_logo_b'); ?>');
              background-size: 60px 243px;
              width: 60px;
              height: 243px;
             }
            .home {
              background-image: url('<?php echo get_theme_mod('thegividens_smallbackground'); ?>');
              background-attachment: fixed;
              background-size: cover;
              background-position: center center;
              background-repeat: no-repeat;
             }
             @media all and (min-width: 800px) {
              .home {
                background-image: url('<?php echo get_theme_mod('thegividens_background'); ?>');
              }
             }

         </style>
    <?php
}
add_action( 'wp_head', 'thegividens_customize_css');


//Script-tac-ulous -> All the Sidr JS and CSS files
function thegividens_scripts_styles_sidr() {

  wp_enqueue_script ( 'sidrjs' , get_stylesheet_directory_uri() . '/js/jquery.sidr.min.js', array( 'jquery' ), '1', true );
  wp_enqueue_script ( 'sidrinit' , get_stylesheet_directory_uri() . '/js/sidr-init.js', array( 'sidrjs' ), '1', true );

}
add_action( 'wp_enqueue_scripts', 'thegividens_scripts_styles_sidr' ); 
