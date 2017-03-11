<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site custom-bg">
    <div id="wrap-header" class="wrap-header">
      <header id="masthead" class="site-header">
        <div class="site-branding">

          <?php if ( get_theme_mod( 'thegividens_logo' ) ) : ?>
              <div id='site-logo'>
                  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'></a>
              </div>
          <?php else : ?>
              <hgroup>
                  <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
              </hgroup>
          <?php endif; ?>

        </div>

        <a id="nav-toggle" href="#sidr">Menu</a>

        <div id="sidr">
          <span class="wedding-date"><?php bloginfo( 'description' ); ?></span>
          <div id="responsive-menu"><?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>

          <div class="mobile-site-branding">

            <?php if ( get_theme_mod( 'thegividens_logo' ) ) : ?>
                <div id='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'></a>
                </div>
            <?php else : ?>
                <hgroup>
                    <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                </hgroup>
            <?php endif; ?>

          </div>

        </div>

        <nav id="site-navigation" class="site-navigation">
          <div id="responsive-menu">
            <span class="site-description"><?php bloginfo( 'description' ); ?></span>
            <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?>
          </div>
        </nav>

      </header>
    </div>
    <div id="wrap-main" class="wrap-main">
