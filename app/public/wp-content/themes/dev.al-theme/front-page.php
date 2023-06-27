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
    ?>
  </article>
  <?php
endwhile;

get_footer();
