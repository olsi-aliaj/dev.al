<?php


get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	
// Enable Gutenberg for WordPress >= 5.0
add_filter('use_block_editor_for_post', 'shapeSpace_enable_gutenberg_post_ids', 10, 2);

endwhile; // End of the loop.

get_footer();
