<?php get_header(); ?>
  <div id="wrap-content" class="wrap-content">
    <div id="content" class="site-content">
      <section id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php if ( have_posts() ) {
          while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
<!--               <header class="entry-header">
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
              </header> -->
<!--               <footer class="entry-meta">
                <?php printf( __( 'Posted <time datetime="%1$s">%2$s</time> by %3$s. ', 'thegividens' ), get_post_time('c'), get_the_date(), get_the_author() ); ?>
                <?php _e( 'Categories: ', 'thegividens' ); the_category( ', ' ); echo '. '; ?>
              </footer> -->
              <div class="entry-content">

                <?php 
                if( have_rows('content_block') ):

                  while ( have_rows('content_block') ): the_row();

                    if( get_row_layout() == 'full_width' )
                        get_template_part( 'content', 'fullwidth' );

                    if( get_row_layout() == 'text_right' )
                        get_template_part( 'content', 'textright' );

                    if( get_row_layout() == 'text_right_image_left' )
                        get_template_part( 'content', 'textimage' );  

                    if( get_row_layout() == 'center_image' )
                        get_template_part( 'content', 'centerimage' );                    

                    if( get_row_layout() == 'gallery_three_a' )
                        get_template_part( 'content', 'images' );

                    if( get_row_layout() == 'gallery_three_b' )
                        get_template_part( 'content', 'gallery' );

                    if( get_row_layout() == 'side_by_side' )
                        get_template_part( 'content', 'twophotos' );

                  endwhile;

                else :

                endif;
                ?>

                <?php the_content(); ?>

                <?php wp_link_pages(); ?>
              </div>
            </article>
          <?php endwhile;
        } else { ?>
          <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
              <h1><?php _e( 'Not found', 'thegividens' ); ?></h1>
            </header>
            <div class="entry-content">
              <p><?php _e( 'Sorry, but your request could not be completed.', 'thegividens' ); ?></p>
              <?php get_search_form(); ?>
            </div>
          </article>
        <?php } ?>
        </main>
      </section>
    </div>
  </div>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>