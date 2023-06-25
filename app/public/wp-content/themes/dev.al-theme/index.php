<?php
/**
 * The main template file.
 *
 * @package dev.al-theme
 */

get_header();

// Output the hero section.
get_template_part( 'template-parts/content', 'hero' );

get_footer();
