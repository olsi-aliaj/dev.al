<?php
/**
 * The template for the home page.
 *
 * @package dev.al-theme
 */

get_header();


while ( have_posts() ) :
  the_post();
  ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Output the hero section.
    get_template_part( 'template-parts/content', 'hero' );
    //Output features section.
    get_template_part( 'template-parts/content', 'features' );
     //Output Destinations section.
    get_template_part( 'template-parts/content', 'destinations' );
    //Output Booking section.
    get_template_part( 'template-parts/content', 'booking' );
    //Output Gallery section.
    get_template_part( 'template-parts/content', 'gallery' );
    ?>
       
  </article>
  <?php
endwhile;

get_footer();
