<?php
/*
Template Name: Hero Page Template
Template Post Type: page
*/

get_header(); ?>

<?php 
$background_image = get_field('background_image');
$heading_text = get_field('hero_heading');
$paragraph = get_field('hero_paragraph');
$button_text = get_field('hero_button');
$button_url = get_field('hero_button_link');
?>



<section class="hero-section" style="background-image: url(<?php echo $background_image; ?>);">
  <div class="heading-text container">
    <h1 class="hero-heading"><?php echo $heading_text; ?></h1>
    <p class='hero-paragraph'><?php echo $paragraph; ?></p>
    <a  href="<?php echo $button_url; ?>" class="hero-button"><?php echo $button_text; ?></a>
  </div>
</section>



<?php get_footer(); ?>
