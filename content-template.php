<?php

// check if the flexible content field has rows of data
if( have_rows('content_block') ):

 	// loop through the rows of data
    while ( have_rows('content_block') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'text_only' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');

					echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

				endwhile;

				echo '</ul>';

			endif;

        endif; // Close row_layout ONE

		// check current row layout
        if( get_row_layout() == 'text_right_image_left' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');

					echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

				endwhile;

				echo '</ul>';

			endif;

        endif; // Close row_layout TWO

		// check current row layout
        if( get_row_layout() == 'gallery_three' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');

					echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

				endwhile;

				echo '</ul>';

			endif;

        endif; // Close row_layout THREE

    endwhile;

else :

    // no layouts found

endif;

?>